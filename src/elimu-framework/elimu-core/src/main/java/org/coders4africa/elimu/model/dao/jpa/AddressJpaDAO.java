/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao.jpa;


import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.PersistenceContextType;
import org.coders4africa.elimu.model.Address;

/**
 *
 * @author MSOMDA
 */
public class AddressJpaDAO extends AbstractJpaDAO<Address> {

    @PersistenceContext(type=PersistenceContextType.TRANSACTION)
    private EntityManager entityManager;
    
    public AddressJpaDAO() {
        super(Address.class);
    }

    @Override
    protected EntityManager getEntityManager() {
        return entityManager;
    }
}
