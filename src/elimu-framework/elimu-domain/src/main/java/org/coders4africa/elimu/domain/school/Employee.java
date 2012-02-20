/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.domain.school;

import javax.persistence.CascadeType;
import javax.persistence.DiscriminatorValue;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlAttribute;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;
import org.coders4africa.elimu.domain.Person;
import org.coders4africa.elimu.domain.school.enums.Function;
import org.coders4africa.elimu.domain.school.enums.PersonType;

/**
 *
 * @author MSOMDA
 */
@Entity
@Table(name = "schoolemployees")
@DiscriminatorValue(value = PersonType.EMPLOYEE)
@NamedQueries({
    @NamedQuery(name = Employee.QUERY_COUNT_SHOOL_EMPLOYEES,
    query = "select count(*) from Employee e where e.school.id = ?1"),
    @NamedQuery(name = Employee.QUERY_SHOOL_EMPLOYEES,
    query = "from Employee e where e.school.id = ?1")
})
@XmlRootElement
public class Employee extends Person {

    private static final long serialVersionUID = 1L;
    public static final String QUERY_COUNT_SHOOL_EMPLOYEES = "queryCountSchoolEmployees";
    public static final String QUERY_SHOOL_EMPLOYEES = "querySchoolEmployees";
    @Enumerated(EnumType.STRING)
    private Function function;
    @ManyToOne(targetEntity = School.class, cascade = {
        CascadeType.MERGE, CascadeType.PERSIST, CascadeType.REFRESH,
        CascadeType.REMOVE}, fetch = FetchType.LAZY)
    @JoinColumn(name = "schoolID", nullable = false)
    private School school;

    @Override
    @XmlAttribute
    public Long getId() {
        return super.getId();
    }

    @Override
    public void setId(Long id) {
        super.setId(id);
    }

    /**
     * Get the value of school
     *
     * @return the value of school
     */
    @XmlTransient
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

    /**
     * Get the value of function
     *
     * @return the value of function
     */
    public Function getFunction() {
        return function;
    }

    /**
     * Set the value of function
     *
     * @param function new value of function
     */
    public void setFunction(Function function) {
        this.function = function;
    }

    @Override
    public int hashCode() {
        int hash = 17;
        hash += super.hashCode();
        hash += (function != null ? function.hashCode() : 1) * hash;
        hash += (school != null ? school.hashCode() : 1) * hash;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        if (!(object instanceof Employee)) {
            return false;
        }
        Employee other = (Employee) object;
        if (!super.equals(other)) {
            return false;
        }
        return (function == null ? other.getFunction() == null : function.equals(other.getFunction()))
                && (school == null ? other.getFirstName() == null : school.equals(other.getSchool()));
    }

    @Override
    public String toString() {
        return "Employee#" + getId() + "[ function=" + function + ", person=" + super.toString() + ", school=" + school.toString() + " ]";
    }
}
