/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model.dao.jpa;

import org.coders4africa.elimu.school.model.School;
import java.util.Calendar;
import javax.annotation.Resource;
import org.coders4africa.elimu.model.Address;
import org.coders4africa.elimu.model.enums.Gender;
import org.coders4africa.elimu.model.enums.Title;
import org.coders4africa.elimu.school.model.Employee;
import org.coders4africa.elimu.school.model.enums.SchoolEmployeeFunctions;
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
public class EmployeeJpaDAOTest extends AbstractTransactionalTest{
    
    @Resource(name="employeeDAO")
    EmployeeJpaDAO dao;
       
    public EmployeeJpaDAOTest() {
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
    public void testGetCreate() {
        
        assertTrue("DB must be empty for use", countTableRows("schoolemployees") == 0);
        
        Employee employee = new Employee();
        
        employee.setTitle(Title.Mr);
        employee.setFirstName("Aymard");
        employee.setLastName("DUPON");
        employee.setGender(Gender.Male);
        employee.setBirthDayDate(Calendar.getInstance().getTime());
        
        Address address = new Address();
        address.setCelPhone("0658888606");
        address.setCity("Boissy");
        address.setEmail("martialsomda@yahoo.fr");
        address.setState("France");
        
        employee.setAddress(address);
        
        employee.setFunction(SchoolEmployeeFunctions.Teacher);
        
        School school = new School();
        
        Address schoolAddress = new Address();
        schoolAddress.setCelPhone("0650000282");
        schoolAddress.setCity("NY");
        schoolAddress.setEmail("contact@harvard.com");
        schoolAddress.setState("USA");
        
        school.setName("Harvard");
        school.setFax("0167928101");
        school.setAddress(schoolAddress);
        
        employee.setSchool(school);
        
        dao.save(employee);
        
        dao.getEntityManager().flush();
        
        assertTrue("DB must contain one employee", countTableRows("schoolemployees") == 1);
        assertTrue("DB must contain two addresses", countTableRows("addresses") == 2);
        assertTrue("DB must contain one school", countTableRows("schools") == 1);
    }
}
