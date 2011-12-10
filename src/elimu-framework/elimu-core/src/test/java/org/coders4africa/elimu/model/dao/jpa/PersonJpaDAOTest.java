/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao.jpa;

import java.util.Calendar;
import javax.annotation.Resource;
import org.coders4africa.elimu.model.Address;
import org.coders4africa.elimu.model.Person;
import org.coders4africa.elimu.model.enums.Gender;
import org.coders4africa.elimu.model.enums.Title;
import org.coders4africa.elimu.test.AbstractTransactionalTest;
import org.coders4africa.elimu.test.ConfigFilesLocator;
import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import org.springframework.test.context.ContextConfiguration;
import static org.junit.Assert.*;

/**
 *
 * @author MSOMDA
 */
@ContextConfiguration({ConfigFilesLocator.DAOs})
public class PersonJpaDAOTest extends AbstractTransactionalTest {
    
    @Resource(name="personDAO")
    PersonJpaDAO dao;
    
    public PersonJpaDAOTest(){       
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
        
        assertTrue("DB must be empty for use", countTableRows("persons") == 0);
        
        Person person = new Person();
        
        person.setTitle(Title.Mr);
        person.setFirstName("Martial");
        person.setLastName("SOMDA");
        person.setGender(Gender.Male);
        person.setBirthDayDate(Calendar.getInstance().getTime());
        
        Address address = new Address();
        address.setCelPhone("0658888606");
        address.setCity("Boissy");
        address.setEmail("martialsomda@yahoo.fr");
        address.setState("France");
        
        person.setAddress(address);
        
        dao.save(person);
        
        dao.getEntityManager().flush();
        
        assertTrue("DB must contain one person", countTableRows("persons") == 1);
        assertTrue("DB must contain one address", countTableRows("addresses") == 1);
        
    }
}
