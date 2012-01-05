/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model;

import java.io.Serializable;
import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;
import org.coders4africa.elimu.model.Person;
import org.coders4africa.elimu.school.model.enums.SchoolEmployeeFunctions;

/**
 *
 * @author MSOMDA
 */
@Entity
@Table(name="schoolemployees")
@XmlRootElement
public class Employee extends Person implements Serializable {
    private static final long serialVersionUID = 1L;

    @Enumerated(EnumType.STRING)
    private SchoolEmployeeFunctions function;
    @OneToOne(targetEntity=School.class, cascade={
        CascadeType.MERGE, CascadeType.PERSIST, CascadeType.REFRESH, 
        CascadeType.REMOVE},fetch= FetchType.LAZY)
    @JoinColumn(name="schoolID",unique=true,nullable=false)
    protected School school;

    /**
     * Get the value of school
     *
     * @return the value of school
     */
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
    public SchoolEmployeeFunctions getFunction() {
        return function;
    }

    /**
     * Set the value of function
     *
     * @param function new value of function
     */
    public void setFunction(SchoolEmployeeFunctions function) {
        this.function = function;
    }


    @Override
    public int hashCode() {
        int hash = 17;
        hash += super.hashCode();
        hash += (function != null ? function.hashCode() : 1)*hash;
        hash += (school != null ? school.hashCode() : 1)*hash;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        if (!(object instanceof Employee)) {
            return false;
        }
        Employee other = (Employee) object;
        if(!super.equals(other)){
            return false;
        }
        return (function == null ? other.getFunction() == null : function.equals(other.getFunction()))
                && (school == null ? other.getFirstName() == null : school.equals(other.getSchool()));
    }

    @Override
    public String toString() {
        return "Employee[ function=" + function + ", person="+  super.toString() +", school="+ school.toString() +" ]";
    }
    
}
