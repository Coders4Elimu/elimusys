/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.service.school.impl;

import org.coders4africa.elimu.service.jpa.JPABaseDAO;
import java.util.List;
import javax.ejb.EJB;
import javax.ejb.Local;
import javax.ejb.Stateless;
import javax.interceptor.Interceptors;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.domain.school.School;
import org.coders4africa.elimu.service.exception.EntityNotFoundException;
import org.coders4africa.elimu.service.exception.NotFoundException;
import org.coders4africa.elimu.service.school.SchoolService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 *
 * @author MSOMDA
 */

@Stateless
@Local
@Interceptors(AuditInterceptor.class)
public class SchoolServiceEJB implements SchoolService {
    
    private Logger logger = LoggerFactory.getLogger(getClass());
    
    @PersistenceContext
    private EntityManager entityManager;
    
    private final JPABaseDAO<School> schoolDAO = new JPABaseDAO<School>(){
        @Override
        public EntityManager getEntityManager() {
            return entityManager;
        }     
    };
    
    private JPABaseDAO<Employee> employeeDAO = new JPABaseDAO<Employee>() {
        @Override
        public EntityManager getEntityManager() {
            return entityManager;
        }
    };
    
    @Override
    public void registerSchool(School school){
        logger.info("About to create a new school");
        schoolDAO.save(school);
    }
    
    @Override
    public void updateSchoolInformation(School school) {
        logger.info("About to update a school");
        schoolDAO.update(school);
    }

    @Override
    public void unregisterSchool(Long id) {
        logger.info("About to delete a school");
        schoolDAO.delete(schoolDAO.findById(id));
    }

    @Override
    public School findSchool(Long id) {
        logger.info("Looking for a school");
        return (School)schoolDAO.findById(id);
    }

    @Override
    public List<School> retrieveAllSchools() {
        logger.info("Load all schools");
        return schoolDAO.findAll();
    }
    
    @Override
    public String countSchools() {
        logger.info("Counting all registered schools");
        return String.valueOf(schoolDAO.count());
    }
    
    @Override
    public void registerEmployee(Employee employee, Long schoolId)
            throws NotFoundException {
        logger.info("About to register a new employee for school {}",schoolId);
        School school = schoolDAO.findById(schoolId);
        
        if(school == null){
            throw new NotFoundException("Could not find a shool with the given id='"+ schoolId +"'");
        }
        
        employee.setSchool(school);
        school.addEmployee(employee);
        employeeDAO.save(employee);  
    }
    
    @Override
    public void unregisterEmployee(Long employeeId)
            throws NotFoundException, EntityNotFoundException {
        logger.info("About to unregister the employee  {}",employeeId);
        Employee employee = employeeDAO.findById(employeeId);
        
        if(employee == null){
            throw new NotFoundException("Could not find a employee with the given id='"+ employeeId +"'");
        }
        
        School school = schoolDAO.checkExists(employee.getSchool());
        
        school.removeEmployee(employee);
        employee.setSchool(null);
        schoolDAO.update(school);
        //employeeDAO.update(employee);
    }
    
    @Override
    public List<Employee> retrieveAllEmployees(Long schoolId) {
        logger.info("Retrieving all employees of school {}",schoolId);
        return employeeDAO.find(Employee.QUERY_SHOOL_EMPLOYEES, schoolId);
    }
    
    @Override
    public String countEmployees(Long schoolId) {
        logger.info("Counting all employees of school {}",schoolId);
        return String.valueOf(employeeDAO.count(Employee.QUERY_COUNT_SHOOL_EMPLOYEES, schoolId));
    }
}
