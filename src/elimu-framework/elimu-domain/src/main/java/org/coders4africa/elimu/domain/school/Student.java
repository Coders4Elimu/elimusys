
package org.coders4africa.elimu.domain.school;

import java.util.HashSet;
import java.util.Set;
import javax.persistence.CascadeType;
import javax.persistence.DiscriminatorValue;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.JoinTable;
import javax.persistence.ManyToMany;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlIDREF;
import javax.xml.bind.annotation.XmlRootElement;
import org.coders4africa.elimu.domain.Person;
import org.coders4africa.elimu.domain.school.enums.Grade;
import org.coders4africa.elimu.domain.school.enums.PersonType;

/**
 * School's Student entity.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Entity
@Table(name = "students")
@DiscriminatorValue(value = PersonType.STUDENT)
@NamedQueries({
    @NamedQuery(name = Student.QUERY_COUNT_SCHOOL_STUDENTS,
    query = "select count(*) from Student s where s.school.id = ?1"),
    @NamedQuery(name = Student.QUERY_SCHOOL_STUDENTS,
    query = "from Student s where s.school.id = ?1"),
    @NamedQuery(name = Student.QUERY_COUNT_CLASSROOM_STUDENTS,
    query = "select count(*) from Student s where s.classroom.id = ?1"),
    @NamedQuery(name = Student.QUERY_CLASSROOM_STUDENTS,
    query = "from Student s where s.classroom.id = ?1")
})
@XmlRootElement
public class Student extends Person {

    private static final long serialVersionUID = 1L;
    public static final String QUERY_COUNT_SCHOOL_STUDENTS = "queryCountSchoolStudents";
    public static final String QUERY_SCHOOL_STUDENTS = "querySchoolStudents";
    public static final String QUERY_COUNT_CLASSROOM_STUDENTS = "queryCountClassroomStudents";
    public static final String QUERY_CLASSROOM_STUDENTS = "queryClassroomStudents";
    
    @Enumerated(EnumType.STRING)
    private Grade grade;
    @ManyToOne(cascade=CascadeType.PERSIST, fetch=FetchType.EAGER)
    @JoinColumn(name = "classroomID", nullable = false)
    private ClassRoom classroom;
    @ManyToOne(cascade=CascadeType.PERSIST, fetch=FetchType.EAGER)
    @JoinColumn(name = "schoolID", nullable = false)
    private School school;
    @ManyToMany(cascade=CascadeType.PERSIST, fetch=FetchType.EAGER)
    @JoinTable(
            name="studentsparents",
            joinColumns=@JoinColumn(name = "studentID", nullable = false),
            inverseJoinColumns=@JoinColumn(name = "parentID", nullable = false))
    private Set<Parent> parents = new HashSet<Parent>();

    public Student() {
    }

    public Student(Person person) {
        super(person.getTitle(), person.getFirstName(), person.getMiddleName(), 
                person.getLastName(), person.getGender(), person.getBirthDayDate(), 
                person.getAddress(), person.getType());
    }
    
    public Student(Person person, Grade grade, ClassRoom classroom, School school) {
        this(person);
        this.grade = grade;
        this.classroom = classroom;
        this.school = school;
    }
    
    public Grade getGrade() {
        return grade;
    }

    public void setGrade(Grade grade) {
        this.grade = grade;
    }

    @XmlIDREF
    public ClassRoom getClassroom() {
        return classroom;
    }

    public void setClassroom(ClassRoom classroom) {
        this.classroom = classroom;
    }
    
    /**
     * Get the value of parents
     *
     * @return the value of parents
     */
    @XmlElement(name="parent")
    @XmlIDREF
    public Set<Parent> getParents() {
        return parents;
    }

    /**
     * Set the value of parents
     *
     * @param parents new value of parents
     */
    public void setParents(Set<Parent> parents) {
        this.parents = parents;
    }
    
    /**
     * Convenient method to add a new parent to the list
     * of parents
     * 
     * @param parent The parent to add
     */
    public synchronized void addParent(Parent parent){
        parents.add(parent);
        parent.addStudent(this);
    }
    
    /**
     * Convenient method to remove a parent to the list
     * of parents
     * 
     * @param parent The parent to remove
     */
    public synchronized void removeParent(Parent parent){
        if(parents.contains(parent)){
            parents.remove(parent);
            parent.removeStudent(this);
        }
    }
    
    /**
     * Get the value of school
     *
     * @return the value of school
     */
    @XmlIDREF
    public School getSchool() {
        return school;
    }

    /**
     * Set the value of school
     *
     * @param school new value of school
     */
    public void setSchool(School school) {
        this.school = school;
    }

    @Override
    public int hashCode() {
        int hash = 31;
        hash += super.hashCode();
        hash += (grade == null ? 1 : grade.hashCode()) * hash;
        hash += (classroom == null ? 1 : classroom.hashCode()) * hash;
        hash += (school == null ? 1 : middleName.hashCode()) * hash;
        hash += (parents != null ? parents.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        if (!(object instanceof Student)) {
            return false;
        }
        Student other = (Student) object;
        if (!super.equals(other)) {
            return false;
        }
        return (grade == null ? other.getGrade() == null : grade.equals(other.getGrade()))
                && (classroom == null ? other.getClassroom() == null : classroom.equals(other.getClassroom()))
                && (school == null ? other.getSchool()== null : school.equals(other.getSchool()))
                && (parents == null ? other.getParents() == null : parents.equals(other.getParents()));
    }

    @Override
    public String toString() {
        return "Student#" + getId() +"[ grade=" + grade + ", person=" + super.toString() + ", school=" + school 
                + ", classroom=" + classroom + ", parents=" + parents + " ]";
    }
    
}
