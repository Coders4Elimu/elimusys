
package org.coders4africa.elimu.service.school;

import java.util.List;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.service.exception.NotFoundException;

/**
 *Elimu system's Employees management contract
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public interface EmployeeService {

    /**
     * Updates an employee informations.
     * 
     * @param employee The employee for whom the informations have to be updated. 
     */
    void updateEmployeeInformation(Employee employee);

    /**
     * Search an employee into Elimu system with a given identifier
     * 
     * @param employeeId The identifier of the employee to look for.
     * @return The founded employee instance or null if the employee does not exist
     */
    Employee findEmployee(Long employeeId);
    
    /**
     * Retrieves all the employees registered into Elimu system.
     * 
     * @return All the employees registered into Elimu system.
     */
    List<Employee> retrieveAllEmployees();
    
     /**
     * Drops an employee from Elimu system.<br/>
     * The employee doesn't appear anymore in the list of emloyees of the school he
     * was registered with.
     * 
     * @param employeeId The identifier of the employee to employee to delete
     * @throws NotFoundException Raised if the employee doesn't exist.
     */
    void deleteEmployee(Long employeeId) throws NotFoundException ;
    
    /**
     * Return the number of employees registered into Elimu system
     * regardless of the schools they are registered with.
     * 
     * @return The number of registered schools employees 
     */
    String countEmployees();
 
}
