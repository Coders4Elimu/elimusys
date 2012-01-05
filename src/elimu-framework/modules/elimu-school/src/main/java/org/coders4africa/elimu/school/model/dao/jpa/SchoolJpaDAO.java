/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model.dao.jpa;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.PersistenceContextType;
import org.coders4africa.elimu.model.dao.jpa.AbstractJpaDAO;
import org.coders4africa.elimu.school.model.School;

/**
 *
 * @author MSOMDA
 */
public class SchoolJpaDAO extends AbstractJpaDAO<School> {

    @PersistenceContext(type=PersistenceContextType.TRANSACTION)
    private EntityManager entityManager;
    
    public SchoolJpaDAO() {
        super(School.class);
    }

    @Override
    protected EntityManager getEntityManager() {
        return entityManager;
    }
    
}
