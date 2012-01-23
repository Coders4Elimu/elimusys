/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model;

import java.io.Serializable;
import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlAttribute;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;
import org.coders4africa.elimu.model.Address;

/**
 *
 * @author MSOMDA
 */
@Entity
@Table(name="schools")
@XmlRootElement
public class School implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long id;
    private String name;
    private String fax;
    private String website;
    @OneToOne(targetEntity=Address.class, cascade={
        CascadeType.MERGE, CascadeType.PERSIST, CascadeType.REFRESH, 
        CascadeType.REMOVE},fetch= FetchType.LAZY)
    @JoinColumn(name="addressID",unique=true,nullable=false)
    private Address address;

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

    @XmlAttribute
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    @XmlTransient
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    @Override
    public int hashCode() {
        int hash = 13;
        hash += (name == null ? 1 : name.hashCode()) * hash;
        hash += (fax == null ? 1 : fax.hashCode()) * hash;
        hash += (website == null ? 1 : website.hashCode()) * hash;
        hash += (address == null ? 1 : address.hashCode()) * hash;
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
                && (address == null ? other.getAddress() == null : address.equals(other.getAddress()));
    }

    @Override
    public String toString() {
        return "School[ name=" + name + ", website="+ website +" ]";
    }
    
}
