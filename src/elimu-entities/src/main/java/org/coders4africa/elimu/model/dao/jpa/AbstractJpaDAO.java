/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao.jpa;

import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.PersistenceContextType;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;
import org.coders4africa.elimu.model.dao.DAO;

/**
 *
 * @author MSOMDA
 */
public class AbstractJpaDAO<T> implements DAO<T> {

    @PersistenceContext(type=PersistenceContextType.TRANSACTION)
    private EntityManager entityManager;
    private Class<T> entityClass;

    public AbstractJpaDAO(Class<T> entityClass) {
        this.entityClass = entityClass;
    }
    
    @Override
    public void save(T entity) {
        entityManager.persist(entity);
    }
    
    @Override
    public void update(T entity) {
        entityManager.merge(this);
    }

    @Override
    public void delete(T entity) {
        entityManager.remove(entityManager.merge(entity));
    }

    @Override
    public T findById(Object id) {
        return entityManager.find(entityClass, id);
    }

    @Override
    public List<T> findAll() {
        CriteriaQuery cq = entityManager.getCriteriaBuilder().createQuery();
        cq.select(cq.from(entityClass));
        return entityManager.createQuery(cq).getResultList();
    }

    @Override
    public int count() {
        CriteriaQuery cq = entityManager.getCriteriaBuilder().createQuery();
        Root<T> rt = cq.from(entityClass);
        cq.select(entityManager.getCriteriaBuilder().count(rt));
        javax.persistence.Query q = entityManager.createQuery(cq);
        return ((Long) q.getSingleResult()).intValue();
    }
    
}
