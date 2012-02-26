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

import org.coders4africa.elimu.service.jpa.JPABaseDAO;
import java.util.List;
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
 * EJB 3.1 implementation of {@link SchoolService}
 * 
 * @author Martial SOMDA
 * @since 1.0
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
        
        school.addEmployee(employee);
        schoolDAO.save(school);  
    }
    
    @Override
    public void unregisterEmployee(Long schoolId, Long employeeId)
            throws NotFoundException, EntityNotFoundException {
        logger.info("About to unregister the employee  {} from the school {}",employeeId, schoolId);
        Employee employee = employeeDAO.findById(employeeId);
        
        if(employee == null){
            throw new NotFoundException("Could not find a employee with the given id='"+ employeeId +"'");
        }
        
        if(!employee.getSchool().getId().equals(schoolId)){
            throw new NotFoundException("Currently knowned employee with the given id='"+ employeeId +"' "
                    + "is not attached to the given school id='"+ schoolId +"' "
                    + "but with school id='"+ employee.getSchool().getId() +"'");
        }
        School school = schoolDAO.checkExists(employee.getSchool());
        
        school.removeEmployee(employee);
        schoolDAO.update(school);
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
