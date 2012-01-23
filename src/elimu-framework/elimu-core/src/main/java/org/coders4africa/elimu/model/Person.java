/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model;

import java.io.Serializable;
import java.text.SimpleDateFormat;
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
import javax.xml.bind.annotation.XmlRootElement;
import org.coders4africa.elimu.model.enums.Gender;
import org.coders4africa.elimu.model.enums.Title;

/**
 *
 * @author MSOMDA
 */
@Entity
@Table(name="persons")
@Inheritance(strategy=InheritanceType.TABLE_PER_CLASS)
@XmlRootElement
public class Person implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy=GenerationType.TABLE)
    @Column(name="personID", nullable=false)
    private Long id;
    @Enumerated(EnumType.STRING)
    protected Title title;
    protected String firstName;
    protected String middleName;
    protected String lastName;
    @Enumerated(EnumType.STRING)
    protected Gender gender;
    @Temporal(TemporalType.DATE)
    protected Date birthDayDate;
    @OneToOne(targetEntity=Address.class, cascade={
        CascadeType.MERGE, CascadeType.PERSIST, CascadeType.REFRESH, 
        CascadeType.REMOVE},fetch= FetchType.LAZY)
    @JoinColumn(name="addressID",unique=true,nullable=false)
    protected Address address;


    public Date getBirthDayDate() {
        return birthDayDate;
    }

    public void setBirthDayDate(Date birthDayDate) {
        this.birthDayDate = birthDayDate;
    }

    public Gender getGender() {
        return gender;
    }

    public void setGender(Gender gender) {
        this.gender = gender;
    }
    
    public String getMiddleName() {
        return middleName;
    }

    public void setMiddleName(String middleName) {
        this.middleName = middleName;
    }
    
    public Title getTitle() {
        return title;
    }

    public void setTitle(Title title) {
        this.title = title;
    }
    
    public Address getAddress() {
        return address;
    }

    public void setAddress(Address address) {
        this.address = address;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public String getFirstName() {
        return firstName;
    }

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
        int hash = 17;
        hash += (title == null ? 1 : title.hashCode()) * hash;
        hash += (firstName == null ? 1 : firstName.hashCode()) * hash;
        hash += (middleName == null ? 1 : middleName.hashCode()) * hash;
        hash += (lastName == null ? 1 : lastName.hashCode()) * hash;
        hash += (gender != null ? gender.hashCode() : 0);
        hash += (birthDayDate == null ? 1 : birthDayDate.hashCode()) * hash;
        hash += (address == null ? 1 : address.hashCode()) * hash;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        if (!(object instanceof Person)) {
            return false;
        }
        Person other = (Person) object;
        return (title == null ? other.getTitle() == null : title.equals(other.getTitle()))
                && (firstName == null ? other.getFirstName() == null : firstName.equals(other.getFirstName()))
                && (middleName == null ? other.getMiddleName() == null : middleName.equals(other.getMiddleName()))
                && (lastName == null ? other.getLastName() == null : lastName.equals(other.getLastName()))
                && (gender == null ? other.getGender() == null : gender.equals(other.getGender()))
                && (birthDayDate == null ? other.getBirthDayDate()== null : birthDayDate.equals(other.getBirthDayDate()))
                && (address == null ? other.getAddress() == null : address.equals(other.getAddress()));
    }

    @Override
    public String toString() {
        return "Person[ firstname=" + firstName + 
                ", lastname="+ lastName +", dob="+ new SimpleDateFormat("yyyy-MM-dd").format(birthDayDate) +" ]";
    }
    
}
