
package org.coders4africa.elimu.service.school.impl;

import java.util.List;
import javax.ejb.Local;
import javax.ejb.Stateless;
import javax.interceptor.Interceptors;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import org.coders4africa.elimu.domain.school.Student;
import org.coders4africa.elimu.domain.school.mapper.StudentMapper;
import org.coders4africa.elimu.service.exception.NotFoundException;
import org.coders4africa.elimu.service.jpa.JPABaseDAO;
import org.coders4africa.elimu.service.school.StudentService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 * EJB 3.1 implementation of {@link StudentService}
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Stateless
@Local
@Interceptors(AuditInterceptor.class)
public class StudentServiceEJB implements StudentService {

    private Logger logger = LoggerFactory.getLogger(getClass());
    
    @PersistenceContext
    private EntityManager entityManager;
    
    private JPABaseDAO<Student> studentDAO = new JPABaseDAO<Student>() {
        @Override
        public EntityManager getEntityManager() {
            return entityManager;
        }
    };
    
    @Override
    public void updateStudentInformation(Student student) {
        logger.info("About to update a student");
        Student attached = studentDAO.findById(student.getId());
        studentDAO.update(new StudentMapper().merge(student, attached));
    }

    @Override
    public Student findStudent(Long studentId) {
        logger.info("Loading student {} informations",studentId);
        return studentDAO.findById(studentId);
    }

    @Override
    public List<Student> retrieveAllStudents() {
        logger.info("About to load all students");
        return studentDAO.findAll();
    }

    @Override
    public void deleteStudent(Long studentId) throws NotFoundException {
        logger.info("About to unregister the student  {}",studentId);
        Student student = studentDAO.findById(studentId);
        
        if(student == null){
            throw new NotFoundException("Could not find a student with the given id='"+ studentId +"'");
        }
        
        studentDAO.delete(student);
    }

    @Override
    public String countStudents() {
        logger.info("Counting all existing students");
        return String.valueOf(studentDAO.count());
    }
    
}
