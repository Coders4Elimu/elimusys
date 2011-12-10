/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model;

import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

/**
 *
 * @author MSOMDA
 */
@Entity
public class Address implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;
    private String street;
    private String city;
    private String state;
    private String zipCode;
    private String country;
    private String details;
    private String landPhone;
    private String celPhone;
    private String email;

    
    /**
     * Get the value of email
     *
     * @return the value of email
     */
    public String getEmail() {
        return email;
    }

    /**
     * Set the value of email
     *
     * @param email new value of email
     */
    public void setEmail(String email) {
        this.email = email;
    }


    /**
     * Get the value of celPhone
     *
     * @return the value of celPhone
     */
    public String getCelPhone() {
        return celPhone;
    }

    /**
     * Set the value of celPhone
     *
     * @param celPhone new value of celPhone
     */
    public void setCelPhone(String celPhone) {
        this.celPhone = celPhone;
    }


    /**
     * Get the value of landPhone
     *
     * @return the value of landPhone
     */
    public String getLandPhone() {
        return landPhone;
    }

    /**
     * Set the value of landPhone
     *
     * @param landPhone new value of landPhone
     */
    public void setLandPhone(String landPhone) {
        this.landPhone = landPhone;
    }


    /**
     * Get the value of details
     *
     * @return the value of details
     */
    public String getDetails() {
        return details;
    }

    /**
     * Set the value of details
     *
     * @param details new value of details
     */
    public void setDetails(String details) {
        this.details = details;
    }


    /**
     * Get the value of country
     *
     * @return the value of country
     */
    public String getCountry() {
        return country;
    }

    /**
     * Set the value of country
     *
     * @param country new value of country
     */
    public void setCountry(String country) {
        this.country = country;
    }


    /**
     * Get the value of zipCode
     *
     * @return the value of zipCode
     */
    public String getZipCode() {
        return zipCode;
    }

    /**
     * Set the value of zipCode
     *
     * @param zipCode new value of zipCode
     */
    public void setZipCode(String zipCode) {
        this.zipCode = zipCode;
    }


    /**
     * Get the value of state
     *
     * @return the value of state
     */
    public String getState() {
        return state;
    }

    /**
     * Set the value of state
     *
     * @param state new value of state
     */
    public void setState(String state) {
        this.state = state;
    }

    
    /**
     * Get the value of city
     *
     * @return the value of city
     */
    public String getCity() {
        return city;
    }

    /**
     * Set the value of city
     *
     * @param city new value of city
     */
    public void setCity(String city) {
        this.city = city;
    }

    

    /**
     * Get the value of street
     *
     * @return the value of street
     */
    public String getStreet() {
        return street;
    }

    /**
     * Set the value of street
     *
     * @param street new value of street
     */
    public void setStreet(String street) {
        this.street = street;
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
        if (!(object instanceof Address)) {
            return false;
        }
        Address other = (Address) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "org.coders4africa.elimu.model.Address[ id=" + id + " ]";
    }
    
}
