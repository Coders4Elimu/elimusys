/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.test;

import javax.inject.Inject;
import javax.sql.DataSource;
import org.springframework.jdbc.core.simple.SimpleJdbcTemplate;
import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.TestExecutionListeners;
import org.springframework.test.context.transaction.TransactionConfiguration;
import org.springframework.test.context.transaction.TransactionalTestExecutionListener;

import org.springframework.transaction.annotation.Transactional;

/**
 *
 * @author MSOMDA
 */
@TestExecutionListeners( { TransactionalTestExecutionListener.class })
@ContextConfiguration(locations={
    ConfigFilesLocator.TEST_TRANSACTION})
@TransactionConfiguration(transactionManager="txManager",defaultRollback=true)
@Transactional
public class AbstractTransactionalTest extends AbstractTest{
    
    protected SimpleJdbcTemplate jdbcTemplate;
    
    @Inject
    public void setJdbcTemplate(DataSource dataSource){
        jdbcTemplate = new SimpleJdbcTemplate(dataSource);
    }
    
}
