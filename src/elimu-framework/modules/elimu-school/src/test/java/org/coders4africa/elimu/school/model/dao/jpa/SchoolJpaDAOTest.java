/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model.dao.jpa;

import org.springframework.test.context.ContextConfiguration;
import org.coders4africa.elimu.test.ConfigFilesLocator;
import javax.inject.Inject;
import org.coders4africa.elimu.model.Address;
import org.coders4africa.elimu.school.model.School;
import org.coders4africa.elimu.test.AbstractTransactionalTest;
import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author MSOMDA
 */
@ContextConfiguration({ConfigFilesLocator.DAOs})
public class SchoolJpaDAOTest extends AbstractTransactionalTest{
    
    @Inject
    SchoolJpaDAO dao;
            
    public SchoolJpaDAOTest() {
    }

    @BeforeClass
    public static void setUpClass() throws Exception {
    }

    @AfterClass
    public static void tearDownClass() throws Exception {
    }
    
    @Before
    public void setUp() {
    }
    
    @After
    public void tearDown() {
    }

    @Test
    public void testCreate() {
        
        assertTrue("DB must be empty for use", dao.count() == 0);
        
        School school = new School();
        
        school.setName("International School");
        school.setFax("06567902");
        school.setWebsite("www.tartanpion.com");
        
        Address address = new Address();
        address.setCelPhone("0658888606");
        address.setCity("Paris");
        address.setEmail("contact@tartanpion.com");
        address.setState("France");
        
        school.setAddress(address);
        
        dao.save(school);
        
        assertTrue("DB must contain one school", dao.count() == 1);
    }
}
