
package org.coders4africa.elimu.domain;

import java.text.SimpleDateFormat;
import java.util.Date;
import javax.persistence.CascadeType;
import javax.persistence.DiscriminatorColumn;
import javax.persistence.DiscriminatorType;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.FetchType;
import javax.persistence.Inheritance;
import javax.persistence.InheritanceType;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import org.coders4africa.elimu.domain.enums.Gender;
import org.coders4africa.elimu.domain.enums.Title;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.domain.school.enums.PersonType;

/**
 * Person Entity.<br/>Base class for Elimu human actors
 * @author Martial SOMDA
 * @see Employee
 * @since 1.0
 */
@Entity
@Table(name="persons")
@Inheritance(strategy=InheritanceType.JOINED)
@DiscriminatorColumn(discriminatorType= DiscriminatorType.STRING,name="type")
public abstract class Person extends BaseEntity {
    
    private static final long serialVersionUID = 1L;

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
        CascadeType.REMOVE},fetch=FetchType.EAGER)
    @JoinColumn(name="addressID",referencedColumnName="id",unique=true,nullable=false)
    protected Address address;
    @Enumerated(EnumType.STRING)
    private String type;
   
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

     /**
     * Get the value of type
     *
     * @return the value of type
     */
        public String getType() {
        return type;
    }

    /**
     * Set the value of type
     *
     * @param function new value of type
     */
    public void setType(String type) {
        if(PersonType.isKnownType(type)){
            this.type = type;
        }
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
        hash += (type != null ? type.hashCode() : 1)*hash;
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
                && (address == null ? other.getAddress() == null : address.equals(other.getAddress()))
                && (type == null ? other.getType() == null : type.equals(other.getType()));
    }

    @Override
    public String toString() {
        return "Person#"+ getId() +"[ type=" + type + ", firstname=" + firstName + 
                ", lastname="+ lastName +", dob="+ new SimpleDateFormat("yyyy-MM-dd").format(birthDayDate) +", address="+ address + " ]";
    }
    
}
