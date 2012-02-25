/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.service.school.impl;

import java.util.List;
import javax.ejb.EJB;
import javax.ejb.Local;
import javax.ejb.Stateless;
import javax.interceptor.Interceptors;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.service.jpa.JPABaseDAO;
import org.coders4africa.elimu.service.school.EmployeeService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 *
 * @author MSOMDA
 */
@Stateless
@Local
@Interceptors(AuditInterceptor.class)
public class EmployeeServiceEJB implements EmployeeService {

    private Logger logger = LoggerFactory.getLogger(getClass());
    
    @PersistenceContext
    private EntityManager entityManager;
    
    private JPABaseDAO<Employee> employeeDAO = new JPABaseDAO<Employee>() {
        @Override
        public EntityManager getEntityManager() {
            return entityManager;
        }
    };

    @Override
    public void updateEmployeeInformation(Employee employee) {
        logger.info("About to update an employee");
        employeeDAO.update(employee);
    }

    @Override
    public Employee findEmployee(Long employeeId) {
        logger.info("Loading employee {} informations",employeeId);
        return employeeDAO.findById(employeeId);
    }

    @Override
    public List<Employee> retrieveAllEmployees() {
        logger.info("About to load all employees");
        return employeeDAO.findAll();
    }

    @Override
    public String countEmployees() {
        logger.info("Counting all existing employees");
        return String.valueOf(employeeDAO.count());
    }

}
