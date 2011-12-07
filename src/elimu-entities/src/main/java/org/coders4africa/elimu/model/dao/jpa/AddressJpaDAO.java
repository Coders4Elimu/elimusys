/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao.jpa;


import org.coders4africa.elimu.model.Address;

/**
 *
 * @author MSOMDA
 */
public class AddressJpaDAO extends AbstractJpaDAO<Address> {

    public AddressJpaDAO() {
        super(Address.class);
    }
}
