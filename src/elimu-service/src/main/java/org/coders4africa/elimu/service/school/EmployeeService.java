/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.service.school;

import java.util.List;
import org.coders4africa.elimu.domain.school.Employee;

/**
 *
 * @author MSOMDA
 */
public interface EmployeeService {

    void updateEmployeeInformation(Employee employee);

    Employee findEmployee(Long employeeId);
    
    List<Employee> retrieveAllEmployees();
    
    String countEmployees();
 
}
