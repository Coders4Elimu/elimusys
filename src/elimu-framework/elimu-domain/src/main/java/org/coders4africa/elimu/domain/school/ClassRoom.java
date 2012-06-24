
package org.coders4africa.elimu.domain.school;

import java.util.HashSet;
import java.util.Set;
import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlIDREF;
import javax.xml.bind.annotation.XmlRootElement;
import org.coders4africa.elimu.domain.BaseEntity;

/**
 * ClassRoom entity.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Entity
@Table(name = "classrooms")
@XmlRootElement
public class ClassRoom extends BaseEntity {
    
    private static final long serialVersionUID = 1L;

    private String className;
    @OneToMany(cascade=CascadeType.ALL,
            fetch= FetchType.LAZY,mappedBy="classroom")
    private Set<Student> students = new HashSet<Student>();


    /**
     * Get the classromm name
     * 
     * @return class name
     */
    public String getClassName() {
        return className;
    }

    /**
     * Set the classroom name
     * 
     * @param className the new classname to set
     */
    public void setClassName(String className) {
        this.className = className;
    }
    
    /**
     * @return the students
     */
    @XmlElement(name="student")
    @XmlIDREF
    public Set<Student> getStudents() {
        return students;
    }

    /**
     * @param students the students to set
     */
    public void setStudents(Set<Student> students) {
        this.students = students;
    }
    
    
    /**
     * Convenient method to add a new student to the list
     * of students.<br/>
     * Checks if the student has the same grade than others
     * 
     * @param student The student to add
     * 
     * @throws IllegalArgumentException Raised if the given student has not the same grade than other students in the classroom
     */
    public synchronized void addStudent(Student student) throws IllegalArgumentException {
        if(!students.isEmpty() 
                && student.getGrade() != students.iterator().next().getGrade()){
            throw new IllegalArgumentException("The student must have the same garde than other students in the classroom "
                    + "('"+ students.iterator().next().getGrade() +"')");
        }
        students.add(student);
        student.setClassroom(this);
    }
    
    /**
     * Convenient method to remove a student to the list
     * of students
     * 
     * @param student The student to remove
     */
    public synchronized void removeStudent(Student student){
        if(students.contains(student)){
            students.remove(student);
            student.setClassroom(null);
        }
    }
    
    @Override
    public int hashCode() {
        int hash = 7;
        hash += super.hashCode();
        hash += (className != null ? className.hashCode() : 1) * hash;
        hash += (students != null ? students.hashCode() : 1) * hash;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
         if (!(object instanceof ClassRoom)) {
            return false;
        }
        ClassRoom other = (ClassRoom) object;
        return (className == null ? other.getClassName() == null : className.equals(other.getClassName()))
                && (students == null ? other.getStudents() == null : students.equals(other.getStudents()));
    }

    @Override
    public String toString() {
        return "ClassRoom#" + getId() + "[ className=" + className + ", students="+ students +" ]";
    }
    
}
