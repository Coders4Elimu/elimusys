/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model.dao.jpa;

import java.util.HashMap;
import java.util.Map;
import javax.annotation.Resource;
import org.springframework.test.context.ContextConfiguration;
import org.coders4africa.elimu.test.ConfigFilesLocator;
import org.coders4africa.elimu.model.Address;
import org.coders4africa.elimu.school.model.School;
import org.coders4africa.elimu.test.AbstractTransactionalTest;
import org.coders4africa.elimu.test.DataSetLocation;
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
    public void create() {
        
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
    
        
    @Test
    @DataSetLocation("school-dataset.xml")
    public void delete(){
        
        assertTrue("DB must contain one school", countTableRows("schools") == 1);
        assertTrue("DB must contain one address", countTableRows("addresses") == 1);
        
        School school = dao.getEntityManager().find(School.class, Long.valueOf("1"));
        
        dao.delete(school);
        
        dao.getEntityManager().flush();
        
        assertTrue("DB must contain no school", countTableRows("schools") == 0);
        assertTrue("DB must contain no address", countTableRows("addresses") == 0);
    }
    
    @Test
    @DataSetLocation("school-dataset.xml")
    public void update(){
        
        assertTrue("DB must contain one school", countTableRows("schools") == 1);
        assertTrue("DB must contain one address", countTableRows("addresses") == 1);
        
        School school = dao.getEntityManager().find(School.class, Long.valueOf("1"));
        
        String newWebSite = "www.toto.com";
        String newStreet = "98 new street";
        
        assertNotSame("to aprove this test the old and new website have to be diferent", newWebSite, school.getWebsite());
        assertNotSame("to aprove this test the old and new street have to be diferent", newStreet, school.getAddress().getStreet());
        
        school.setWebsite(newWebSite);
        school.getAddress().setStreet(newStreet);
        
        dao.update(school);
        
        dao.getEntityManager().flush();
        
        Map resultMap = jdbcTemplate.queryForMap(
                "select s.website, a.street from schools s, addresses a "
                + "where s.addressID = a.addressID "
                + "and s.id = 1", new HashMap<String, Object>());
        
        assertEquals("The update of website property didn't work at all", newWebSite, resultMap.get("website"));
        assertEquals("The update of school.address.street property didn't work at all", newStreet, resultMap.get("street"));
    }
}
