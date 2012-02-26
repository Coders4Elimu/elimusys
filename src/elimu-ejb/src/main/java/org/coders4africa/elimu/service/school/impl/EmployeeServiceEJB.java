/*
 * #%L
 * elimu-ejb
 * 
 * $Id$
 * $HeadURL$
 * %%
 * Copyright (C) 2012 Coders4Africa
 * %%
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 3 of the 
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public 
 * License along with this program.  If not, see
 * <http://www.gnu.org/licenses/gpl-3.0.html>.
 * #L%
 */

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
