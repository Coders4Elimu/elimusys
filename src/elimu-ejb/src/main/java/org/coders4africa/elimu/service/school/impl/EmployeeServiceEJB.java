
package org.coders4africa.elimu.service.school.impl;

import java.util.List;
import javax.ejb.Local;
import javax.ejb.Stateless;
import javax.interceptor.Interceptors;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.service.exception.NotFoundException;
import org.coders4africa.elimu.service.jpa.JPABaseDAO;
import org.coders4africa.elimu.service.school.EmployeeService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 * EJB 3.1 implementation of {@link EmployeeService}
 * 
 * @author Martial SOMDA
 * @since 1.0
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

    @Override
    public void deleteEmployee(Long employeeId) throws NotFoundException {
       logger.info("About to unregister the employee  {}",employeeId);
        Employee employee = employeeDAO.findById(employeeId);
        
        if(employee == null){
            throw new NotFoundException("Could not find a employee with the given id='"+ employeeId +"'");
        }
        
        employeeDAO.delete(employee);
    }

}
