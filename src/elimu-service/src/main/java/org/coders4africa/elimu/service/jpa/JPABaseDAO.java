/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.service.jpa;

import java.lang.reflect.ParameterizedType;
import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.NoResultException;
import javax.persistence.Query;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;
import org.coders4africa.elimu.domain.BaseEntity;

/**
 *
 * @author MSOMDA
 */
public abstract class JPABaseDAO<T extends BaseEntity> {

    private Class<T> entityClass;

    public JPABaseDAO() {
        this.entityClass = (Class<T>)
      ((ParameterizedType)getClass().getGenericSuperclass())
      .getActualTypeArguments()[0];
    }
    
    public void save(T entity) {
        getEntityManager().persist(entity);
    }
    
    public void update(T entity) {
        getEntityManager().merge(entity);
    }

    public void delete(T entity) {
        getEntityManager().remove(
                getEntityManager().contains(entity)? entity : 
                getEntityManager().merge(entity)
                );
    }

    public T findById(Object id) {
        return getEntityManager().find(entityClass, id);
    }

    public List<T> findAll() {
        CriteriaQuery cq = getEntityManager().getCriteriaBuilder().createQuery();
        cq.select(cq.from(entityClass));
        return getEntityManager().createQuery(cq).getResultList();
    }
    
    public List<T> find(String namedQuery, Object... orderedParameters) {
        final Query query = getEntityManager().createNamedQuery(namedQuery);
        int indexParam = 0;
        for (Object p : orderedParameters) {
            query.setParameter(++indexParam, p);
        }
        return (List<T>) query.getResultList();
    }
    
    public T findOne(String namedQuery, Object... orderedParameters)
            throws NotFoundException {

        try {
            final Query query = getEntityManager().createNamedQuery(namedQuery);
            int indexParam = 0;
            for (Object p : orderedParameters) {
                query.setParameter(++indexParam, p);
            }
            return (T) query.getSingleResult();
        } catch (NoResultException e) {
            throw new NotFoundException(e);
        }
    }

    public T checkExists(T entity) throws EntityNotFoundException {
        final T entityFromDatabase = getEntityManager().find(entityClass, entity.getId());

        if (entityFromDatabase == null) {
            throw new EntityNotFoundException(entity);
        }

        return entityFromDatabase;
    }
    
    public int count() {
        CriteriaQuery cq = getEntityManager().getCriteriaBuilder().createQuery();
        Root<T> rt = cq.from(entityClass);
        cq.select(getEntityManager().getCriteriaBuilder().count(rt));
        Query q = getEntityManager().createQuery(cq);
        return ((Long) q.getSingleResult()).intValue();
    }
    
    public int count(String namedQuery, Object... orderedParameters) {

        final Query query = getEntityManager().createNamedQuery(namedQuery);
        int indexParam = 0;
        for (Object p : orderedParameters) {
            query.setParameter(++indexParam, p);
        }
        return ((Long) query.getSingleResult()).intValue();
    }
    
    public void flush() {
         getEntityManager().flush();
    }
    
    public abstract EntityManager getEntityManager();
}
