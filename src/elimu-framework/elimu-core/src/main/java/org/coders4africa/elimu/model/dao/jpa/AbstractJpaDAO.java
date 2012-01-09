/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao.jpa;

import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;
import org.coders4africa.elimu.model.dao.DAO;
/**
 *
 * @author MSOMDA
 */
public abstract class AbstractJpaDAO<T> implements DAO<T> {

    private Class<T> entityClass;

    public AbstractJpaDAO(Class<T> entityClass) {
        this.entityClass = entityClass;
    }
    
    @Override
    public void save(T entity) {
        getEntityManager().persist(entity);
    }
    
    @Override
    public void update(T entity) {
        getEntityManager().merge(entity);
    }

    @Override
    public void delete(T entity) {
        getEntityManager().remove(getEntityManager().merge(entity));
    }

    @Override
    public T findById(Object id) {
        return getEntityManager().find(entityClass, id);
    }

    @Override
    public List<T> findAll() {
        CriteriaQuery cq = getEntityManager().getCriteriaBuilder().createQuery();
        cq.select(cq.from(entityClass));
        return getEntityManager().createQuery(cq).getResultList();
    }

    @Override
    public int count() {
        CriteriaQuery cq = getEntityManager().getCriteriaBuilder().createQuery();
        Root<T> rt = cq.from(entityClass);
        cq.select(getEntityManager().getCriteriaBuilder().count(rt));
        javax.persistence.Query q = getEntityManager().createQuery(cq);
        return ((Long) q.getSingleResult()).intValue();
    }
    
    protected abstract EntityManager getEntityManager();
}
