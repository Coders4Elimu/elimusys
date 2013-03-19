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

import javax.inject.Inject;
import javax.sql.DataSource;
import org.springframework.jdbc.core.simple.SimpleJdbcTemplate;
import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.TestExecutionListeners;
import org.springframework.test.context.transaction.TransactionConfiguration;

import org.springframework.transaction.annotation.Transactional;

/**
 *
 * @author MSOMDA
 */
@TestExecutionListeners( { TransactionalDBUnitTestExecutionListener.class })
@ContextConfiguration(locations={
    ConfigFilesLocator.TEST_TRANSACTION})
@Transactional
@TransactionConfiguration(transactionManager="txManager",defaultRollback=true)
public class AbstractTransactionalTest extends AbstractTest{
    
    protected SimpleJdbcTemplate jdbcTemplate;
    
    @Inject
    public void setJdbcTemplate(DataSource dataSource){
        jdbcTemplate = new SimpleJdbcTemplate(dataSource);
    }
    
    public int countTableRows(String tableName){
        return jdbcTemplate.queryForInt("select count(0) from "+ tableName);
    }
}
