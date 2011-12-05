/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao;

import javax.annotation.Resource;
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
public class AddressDAOTest extends AbstractTransactionalTest {
    
    @Resource(name="addressDAO")
    AddressDAO dao;
    
    public AddressDAOTest() {
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
        
        assertTrue("La base devrait être vide", dao.count() == 0);
        
        Address address = new Address();
        address.setCelPhone("0658888606");
        address.setCity("Boissy");
        address.setEmail("martialsomda@yahoo.fr");
        address.setState("France");
        
        dao.save(address);
        
        assertTrue("La base devrait avoir 1 addresse", dao.count() == 1);
        
    }
}
