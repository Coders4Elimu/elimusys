/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Inheritance;
import javax.persistence.InheritanceType;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import org.coders4africa.elimu.model.enums.Gender;
import org.coders4africa.elimu.model.enums.Title;

/**
 *
 * @author MSOMDA
 */
@Entity
@Table(name="persons")
@Inheritance(strategy=InheritanceType.TABLE_PER_CLASS)
public class Person implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    @Column(name="personID", nullable=false)
    protected Long id;
    @Column(name="title", nullable=false)
    @Enumerated(EnumType.STRING)
    protected Title title;
    @Column(name="firstName")
    protected String firstName;
    @Column(name="middleName")
    protected String middleName;
    @Column(name="lastName")
    protected String lastName;
    @Column(name="gender", nullable=false)
    @Enumerated(EnumType.STRING)
    protected Gender gender;
    @Column(name="birthDayDate")
    @Temporal(TemporalType.DATE)
    protected Date birthDayDate;
    @OneToOne(targetEntity=Address.class, cascade={
        CascadeType.MERGE, CascadeType.PERSIST, CascadeType.REFRESH, 
        CascadeType.REMOVE},fetch= FetchType.LAZY)
    @JoinColumn(name="addressID",unique=true,nullable=false)
    private Address address;

    /**
     * Get the value of birthDayDate
     *
     * @return the value of birthDayDate
     */
    public Date getBirthDayDate() {
        return birthDayDate;
    }

    /**
     * Set the value of birthDayDate
     *
     * @param birthDayDate new value of birthDayDate
     */
    public void setBirthDayDate(Date birthDayDate) {
        this.birthDayDate = birthDayDate;
    }
    
    /**
     * Get the value of gender
     *
     * @return the value of gender
     */
    public Gender getGender() {
        return gender;
    }

    /**
     * Set the value of gender
     *
     * @param gender new value of gender
     */
    public void setGender(Gender gender) {
        this.gender = gender;
    }
    
    /**
     * Get the value of middleName
     *
     * @return the value of middleName
     */
    public String getMiddleName() {
        return middleName;
    }

    /**
     * Set the value of middleName
     *
     * @param middleName new value of middleName
     */
    public void setMiddleName(String middleName) {
        this.middleName = middleName;
    }
    
    /**
     * Get the value of title
     *
     * @return the value of title
     */
    public Title getTitle() {
        return title;
    }

    /**
     * Set the value of title
     *
     * @param title new value of title
     */
    public void setTitle(Title title) {
        this.title = title;
    }
    
    /**
     * Get the value of adress
     *
     * @return the value of adress
     */
    public Address getAddress() {
        return address;
    }

    /**
     * Set the value of adress
     *
     * @param adress new value of adress
     */
    public void setAddress(Address address) {
        this.address = address;
    }

    /**
     * Get the value of lastName
     *
     * @return the value of lastName
     */
    public String getLastName() {
        return lastName;
    }

    /**
     * Set the value of lastName
     *
     * @param lastName new value of lastName
     */
    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    /**
     * Get the value of firstName
     *
     * @return the value of firstName
     */
    public String getFirstName() {
        return firstName;
    }

    /**
     * Set the value of firstName
     *
     * @param firstName new value of firstName
     */
    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Person)) {
            return false;
        }
        Person other = (Person) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "org.coders4africa.elimu.entity.Person[ id=" + id + " ]";
    }
    
}
