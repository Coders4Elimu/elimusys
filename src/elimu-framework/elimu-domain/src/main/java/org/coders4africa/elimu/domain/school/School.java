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

import java.util.HashSet;
import java.util.Set;
import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.OneToMany;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;
import org.coders4africa.elimu.domain.Address;
import org.coders4africa.elimu.domain.BaseEntity;

/**
 * School entity.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Entity
@Table(name="schools")
@XmlRootElement
@XmlAccessorType(XmlAccessType.PROPERTY)
public class School extends BaseEntity {
    
    private static final long serialVersionUID = 1L;
    
    private String name;
    private String fax;
    private String website;
    @OneToOne(cascade=CascadeType.ALL,fetch= FetchType.EAGER)
    @JoinColumn(name="addressID",referencedColumnName="id",unique=true,nullable=false)
    private Address address;
    @OneToMany(cascade={CascadeType.PERSIST, CascadeType.REMOVE} ,
            fetch= FetchType.LAZY,mappedBy="school")
    private Set<Employee> employees = new HashSet<Employee>();
    @OneToMany(cascade={CascadeType.PERSIST, CascadeType.REMOVE},
            fetch= FetchType.LAZY,mappedBy="school")
    private Set<Student> students = new HashSet<Student>();


    @XmlTransient
    public Set<Student> getStudents() {
        return students;
    }

    public void setStudents(Set<Student> students) {
        this.students = students;
    }
    
    
    /**
     * Convenient method to add a new student to the list
     * of students.
     * 
     * @param student The student to add
     */
    public synchronized void addStudent(Student student){
        students.add(student);
        student.setSchool(this);
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
            student.setSchool(null);
        }
    }
    
    @XmlTransient
    public Set<Employee> getEmployees() {
        return employees;
    }


    public void setEmployees(Set<Employee> employees) {
        this.employees = employees;
    }
    
    /**
     * Convenient method to add a new employee to the list
     * of employees
     * 
     * @param employee  The employee to add
     */
    public synchronized void addEmployee(Employee employee){
        employees.add(employee);
        employee.setSchool(this);
    }
    
    /**
     * Convenient method to remove an employee to the list
     * of employees
     * 
     * @param employee The employee to remove
     */
    public synchronized void removeEmployee(Employee employee){
        if(employees.contains(employee)){
            employees.remove(employee);
            employee.setSchool(null);
        }
    }
    
    public Address getAddress() {
        return address;
    }

    public void setAddress(Address address) {
        this.address = address;
    }

    public String getWebsite() {
        return website;
    }

    public void setWebsite(String website) {
        this.website = website;
    }

    public String getFax() {
        return fax;
    }

    public void setFax(String fax) {
        this.fax = fax;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    @Override
    public int hashCode() {
        int hash = 13;
        hash += (name == null ? 1 : name.hashCode()) * hash;
        hash += (fax == null ? 1 : fax.hashCode()) * hash;
        hash += (website == null ? 1 : website.hashCode()) * hash;
        hash += (address == null ? 1 : address.hashCode()) * hash;
        hash += (employees == null ? 1 : employees.hashCode()) * hash;
        hash += (students == null ? 1 : students.hashCode()) * hash;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        if (!(object instanceof School)) {
            return false;
        }
        School other = (School) object;
        return (name == null ? other.getName() == null : name.equals(other.getName()))
                && (fax == null ? other.getFax() == null : fax.equals(other.getFax()))
                && (website == null ? other.getWebsite() == null : website.equals(other.getWebsite()))
                && (address == null ? other.getAddress() == null : address.equals(other.getAddress()))
                && (employees == null ? other.getEmployees() == null : employees.equals(other.getEmployees()))
                && (students == null ? other.getStudents() == null : students.equals(other.getStudents()));
    }
    
    @Override
    public String toString() {
        return "School#"+ getId() +"[ name=" + name + ", website="+ website +", fax="+ fax + ", address="+ address + 
                ", employees="+ employees +", students="+ students +" ]";
    }
}
