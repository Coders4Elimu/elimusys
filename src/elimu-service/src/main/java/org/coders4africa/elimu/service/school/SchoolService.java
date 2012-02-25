/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.service.school;

import java.util.List;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.domain.school.School;
import org.coders4africa.elimu.service.exception.EntityNotFoundException;
import org.coders4africa.elimu.service.exception.NotFoundException;

/**
 *
 * @author MSOMDA
 */
public interface SchoolService {

    String countSchools();

    void registerSchool(School school);

    void updateSchoolInformation(School school);

    School findSchool(Long id);

    List<School> retrieveAllSchools();

    void unregisterSchool(Long id);
     
    void registerEmployee(Employee employee, Long schoolId) throws NotFoundException;
    
    List<Employee> retrieveAllEmployees(Long schoolId);
    
    String countEmployees(Long schoolId);
    
    void unregisterEmployee(Long employeeId) throws NotFoundException, EntityNotFoundException;
}
