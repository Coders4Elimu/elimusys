/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao.jpa;

import javax.inject.Inject;
import org.coders4africa.elimu.model.Address;
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
public class AddressJpaDAOTest extends AbstractTransactionalTest {
    
    @Inject
    AddressJpaDAO dao;
    
    public AddressJpaDAOTest() {
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
        
        Address address = new Address();
        address.setCelPhone("0658888606");
        address.setCity("Boissy");
        address.setEmail("martialsomda@yahoo.fr");
        address.setState("France");
        
        dao.save(address);
        
        assertTrue("DB must contains one address", dao.count() == 1);
        
    }
}
