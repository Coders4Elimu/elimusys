
package org.coders4africa.elimu.domain.school;

import java.util.HashSet;
import java.util.Set;
import javax.persistence.CascadeType;
import javax.persistence.DiscriminatorValue;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.JoinTable;
import javax.persistence.ManyToMany;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlIDREF;
import javax.xml.bind.annotation.XmlRootElement;
import org.coders4africa.elimu.domain.Person;
import org.coders4africa.elimu.domain.school.enums.PersonType;

/**
 * Student's Parent entity.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Entity
@Table(name = "parents")
@DiscriminatorValue(value = PersonType.PARENT)
@XmlRootElement
public class Parent extends Person {
    
    private static final long serialVersionUID = 1L;

    @ManyToMany(cascade=CascadeType.PERSIST, fetch = FetchType.EAGER)
    @JoinTable(
            name="studentsparents",
            joinColumns=@JoinColumn(name = "parentID", nullable = false),
            inverseJoinColumns=@JoinColumn(name = "studentID", nullable = false))
    private Set<Student> students = new HashSet<Student>();

    public Parent() {
    }
    
    public Parent(Person person) {
        super(person.getTitle(), person.getFirstName(), person.getMiddleName(), 
                person.getLastName(), person.getGender(), person.getBirthDayDate(), 
                person.getAddress(), person.getType());
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
     * of students
     * 
     * @param student The student to add
     */
    public synchronized void addStudent(Student student){
        students.add(student);
        student.addParent(this);
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
            student.removeParent(this);
        }
    }
    
    @Override
    public int hashCode() {
        int hash = 11;
        hash += super.hashCode();
        hash += (students != null ? students.hashCode() : 1) * hash;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        if (!(object instanceof Parent)) {
            return false;
        }
        Parent other = (Parent) object;
        if (!super.equals(other)) {
            return false;
        }
        return (students == null ? other.getStudents() == null : students.equals(other.getStudents()));
    }

    @Override
    public String toString() {
        return "Parent#" + getId() + "[ students=" + students + ", person=" + super.toString() + " ]";
    }
    
}
