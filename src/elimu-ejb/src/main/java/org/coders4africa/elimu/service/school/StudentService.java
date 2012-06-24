
package org.coders4africa.elimu.service.school;

import java.util.List;
import org.coders4africa.elimu.domain.school.Student;
import org.coders4africa.elimu.service.exception.NotFoundException;

/**
 * Elimu system's Students management contract
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public interface StudentService {
    
    /**
     * Updates an student informations.
     * 
     * @param student The student for whom the informations have to be updated. 
     */
    void updateStudentInformation(Student student);

    /**
     * Search an student into Elimu system with a given identifier
     * 
     * @param studentId The identifier of the student to look for.
     * @return The founded student instance or null if the student does not exist
     */
    Student findStudent(Long studentId);
    
    /**
     * Retrieves all the students registered into Elimu system.
     * 
     * @return All the students registered into Elimu system.
     */
    List<Student> retrieveAllStudents();
    
     /**
     * Drops an student from Elimu system.<br/>
     * The student doesn't appear anymore in the list of students of the school he
     * was registered with.
     * 
     * @param studentId The identifier of the student to student to delete
     * @throws NotFoundException Raised if the student doesn't exist.
     */
    void deleteStudent(Long studentId) throws NotFoundException ;
    
    /**
     * Return the number of students registered into Elimu system
     * regardless of the schools they are registered with.
     * 
     * @return The number of registered schools students 
     */
    String countStudents();
}
