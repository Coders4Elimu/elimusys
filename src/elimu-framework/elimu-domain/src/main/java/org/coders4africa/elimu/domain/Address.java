
package org.coders4africa.elimu.domain;

import javax.persistence.Entity;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlAttribute;
import javax.xml.bind.annotation.XmlRootElement;

/**
 * Address entity.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Entity
@Table(name="addresses")
@XmlRootElement
public class Address extends BaseEntity {
    
    private static final long serialVersionUID = 1L;
    
    private String street;
    private String city;
    private String state;
    private String zipCode;
    private String country;
    private String details;
    private String landPhone;
    private String celPhone;
    private String email;

    @Override
    @XmlAttribute
    public Long getId() {
        return super.getId();
    }

    @Override
    public void setId(Long id) {
        super.setId(id);
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getCelPhone() {
        return celPhone;
    }

    public void setCelPhone(String celPhone) {
        this.celPhone = celPhone;
    }

    public String getLandPhone() {
        return landPhone;
    }

    public void setLandPhone(String landPhone) {
        this.landPhone = landPhone;
    }

    public String getDetails() {
        return details;
    }

    public void setDetails(String details) {
        this.details = details;
    }

    public String getCountry() {
        return country;
    }

    public void setCountry(String country) {
        this.country = country;
    }

    public String getZipCode() {
        return zipCode;
    }

    public void setZipCode(String zipCode) {
        this.zipCode = zipCode;
    }

    public String getState() {
        return state;
    }

    public void setState(String state) {
        this.state = state;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getStreet() {
        return street;
    }

    public void setStreet(String street) {
        this.street = street;
    }

    @Override
    public int hashCode() {     
        int hash = 37;
        hash += (street == null ? 1 : street.hashCode()) * hash;
        hash += (city == null ? 1 : city.hashCode()) * hash;
        hash += (state == null ? 1 : state.hashCode()) * hash;
        hash += (zipCode == null ? 1 : zipCode.hashCode()) * hash;
        hash += (country != null ? country.hashCode() : 0);
        hash += (details == null ? 1 : details.hashCode()) * hash;
        hash += (landPhone == null ? 1 : landPhone.hashCode()) * hash;
        hash += (celPhone == null ? 1 : celPhone.hashCode()) * hash;
        hash += (email == null ? 1 : email.hashCode()) * hash;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        if (!(object instanceof Address)) {
            return false;
        }
        Address other = (Address) object;
        return (street == null ? other.getStreet() == null : street.equals(other.getStreet()))
                && (city == null ? other.getCity() == null : city.equals(other.getCity()))
                && (state == null ? other.getState() == null : state.equals(other.getState()))
                && (zipCode == null ? other.getZipCode() == null : zipCode.equals(other.getZipCode()))
                && (country == null ? other.getCountry() == null : country.equals(other.getCountry()))
                && (details == null ? other.getDetails()== null : details.equals(other.getDetails()))
                && (landPhone == null ? other.getLandPhone() == null : landPhone.equals(other.getLandPhone()))
                && (celPhone == null ? other.getCelPhone() == null : celPhone.equals(other.getCelPhone()))
                && (email == null ? other.getEmail() == null : email.equals(other.getEmail()));
    }

    @Override
    public String toString() {
        return "Adresse#"+ getId() +"[ street=" + street + ", country="+ country +", email="+ email +", celPhone="+ celPhone +" ]";
    }
    
}
