/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model.dao.jpa;

import javax.annotation.Resource;
import org.springframework.test.context.ContextConfiguration;
import org.coders4africa.elimu.test.ConfigFilesLocator;
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
    
    @Resource(name="schoolDAO")
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
        
        assertTrue("DB must be empty for use", countTableRows("schools") == 0);
        
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
        
        dao.getEntityManager().flush();
        
        assertTrue("DB must contain one school", countTableRows("schools") == 1);
        assertTrue("DB must contain one address", countTableRows("addresses") == 1);
    }
}
