/*
 * #%L
 * elimu-test
 * 
 * $Id$
 * $HeadURL$
 * %%
 * Copyright (C) 2012 Coders4Africa
 * %%
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 3 of the 
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public 
 * License along with this program.  If not, see
 * <http://www.gnu.org/licenses/gpl-3.0.html>.
 * #L%
 */

package org.coders4africa.elimu.test;

import java.sql.Connection;
import java.util.Calendar;
import java.util.Locale;
import javax.sql.DataSource;
import org.dbunit.database.DatabaseConfig;
import org.dbunit.database.DatabaseConnection;
import org.dbunit.database.IDatabaseConnection;
import org.dbunit.dataset.IDataSet;
import org.dbunit.dataset.ReplacementDataSet;
import org.dbunit.dataset.xml.FlatXmlDataSet;
import org.dbunit.operation.DatabaseOperation;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.core.io.Resource;
import org.springframework.jdbc.datasource.DataSourceUtils;
import org.springframework.test.context.TestContext;
import org.springframework.test.context.transaction.TransactionalTestExecutionListener;
import org.springframework.util.StringUtils;

/**
 *
 * @author MSOMDA
 */
public class TransactionalDBUnitTestExecutionListener extends TransactionalTestExecutionListener {

    private Logger logger = LoggerFactory.getLogger(getClass());
    
    @Override
    public void beforeTestMethod(TestContext testContext) throws Exception {
        logger.info("delegate transaction opening to spring native TransactionalTestExecutionListener class");
        super.beforeTestMethod(testContext);
        
        // location of the data set
        String dataSetResourcePath = null;

        // first, the annotation on the test class
        DataSetLocation dsLocation = testContext.getTestMethod().getAnnotation(
                DataSetLocation.class);

        if (dsLocation == null) {
            //if no annotation on the method use the class level one
            dsLocation = testContext.getTestInstance().getClass().getAnnotation(
                DataSetLocation.class);
        }
        
        if (dsLocation != null) {
            // found the annotation
            dataSetResourcePath = dsLocation.value();
            logger.info("annotated test, using data set: {}", dataSetResourcePath);

        } else {
            // no annotation, let's try with the name of the test
            String tempDsRes = testContext.getTestInstance().getClass().getName();
            tempDsRes = StringUtils.replace(tempDsRes, ".", "/");
            tempDsRes = "/" + tempDsRes + "-dataset.xml";
            if (getClass().getResourceAsStream(tempDsRes) != null) {
                logger.info("detected default dataset: {}", tempDsRes);
                dataSetResourcePath = tempDsRes;
            } else {
                logger.info("no default dataset");
            }
        }

        if (dataSetResourcePath != null) {
            
            logger.info("About to use spring opened transaction to execute database operation");
            
            Resource dataSetResource = testContext.getApplicationContext().getResource(
                    dataSetResourcePath);

            IDataSet dataSet = new FlatXmlDataSet(dataSetResource.getInputStream());

            ReplacementDataSet replaceDataSet = new ReplacementDataSet(dataSet);
            replaceDataSet.addReplacementObject("[NULL]", null);
            Calendar cal = Calendar.getInstance(Locale.getDefault());
            replaceDataSet.addReplacementObject("[NOW]", cal.getTime());

            DataSource dataSource  = 
                    testContext.getApplicationContext().getBean(DataSource.class);
            //get spring opened connection
            Connection dbConn = DataSourceUtils.getConnection(dataSource);
            
            //wrap the connection into a dbunit connection
            IDatabaseConnection dbUnitConn = new DatabaseConnection(dbConn);
            DatabaseConfig config = dbUnitConn.getConfig();
            config.setFeature("http://www.dbunit.org/features/qualifiedTableNames", true);
            config.setProperty("http://www.dbunit.org/properties/tableType", new String[]{"TABLE"});
            
            try {
                DatabaseOperation.CLEAN_INSERT.execute(dbUnitConn, replaceDataSet);
            } finally {
                DataSourceUtils.releaseConnection(dbConn, dataSource);
            }
            
        } else {
            logger.info("{} does not have any data set, no data injection", testContext.getClass().getName());
        }		
    }
}
