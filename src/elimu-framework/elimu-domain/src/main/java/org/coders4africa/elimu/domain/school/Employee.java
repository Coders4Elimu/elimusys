/*
 * #%L
 * elimu-domain
 * 
 * $Id$
 * $HeadURL$
 * %%
 * Copyright (C) 2012 Coders4Africa
 * %%
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 3 of the 
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public 
 * License along with this program.  If not, see
 * <http://www.gnu.org/licenses/gpl-3.0.html>.
 * #L%
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
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlAttribute;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;
import org.coders4africa.elimu.domain.Person;
import org.coders4africa.elimu.domain.school.enums.Function;
import org.coders4africa.elimu.domain.school.enums.PersonType;

/**
 * School's Employee entity.
 * 
 * @author Martial SOMDA
 * @since 1.0
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
        CascadeType.PERSIST}, fetch = FetchType.LAZY)
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
