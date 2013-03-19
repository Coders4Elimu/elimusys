/*
 * #%L
 * elimu-ejb
 * 
 * $Id$
 * $HeadURL$
 * %%
 * Copyright (C) 2012 Coders4Africa
 * %%
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 3 of the 
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public 
 * License along with this program.  If not, see
 * <http://www.gnu.org/licenses/gpl-3.0.html>.
 * #L%
 */

package org.coders4africa.elimu.service.jpa;

import org.coders4africa.elimu.service.exception.NotFoundException;
import org.coders4africa.elimu.service.exception.EntityNotFoundException;
import java.lang.reflect.ParameterizedType;
import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.NoResultException;
import javax.persistence.Query;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;
import org.coders4africa.elimu.domain.BaseEntity;

/**
 * Base class for all Data Access Objects (DAO). 
 * This class allows CRUD operations against a database
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public abstract class JPABaseDAO<T extends BaseEntity> {

    /**
     * Concrete class handled by the DAO
     */
    private Class<T> entityClass;

    /**
     * Constructor.
     */
    public JPABaseDAO() {
        this.entityClass = (Class<T>)
      ((ParameterizedType)getClass().getGenericSuperclass())
      .getActualTypeArguments()[0];
    }
    
    /**
     * Save an entity.
     * 
     * @param entity The entity to save.
     */
    public void save(T entity) {
        getEntityManager().persist(entity);
    }
    
    /**
     * Update an entity.
     * 
     * @param entity The entity to update.
     */
    public void update(T entity) {
        getEntityManager().merge(entity);
    }

    /**
     * Delete an entity.
     * 
     * @param entity The entity to delete.
     */
    public void delete(T entity) {
        getEntityManager().remove(
                getEntityManager().contains(entity)? entity : 
                getEntityManager().merge(entity)
                );
    }

    /**
     * Finds an entity using its primary key.
     * 
     * @param id The unique identifier of the entity.
     * @return The unique instance with the given identifier.
     */
    public T findById(Object id) {
        return getEntityManager().find(entityClass, id);
    }

    /**
     * Retrieves all the entities
     * 
     * @return all the entities
     */
    public List<T> findAll() {
        CriteriaQuery cq = getEntityManager().getCriteriaBuilder().createQuery();
        cq.select(cq.from(entityClass));
        return getEntityManager().createQuery(cq).getResultList();
    }
    
    /**
     * Retrieves the entities, result of the execution of a given query.
     * 
     * @param namedQuery Parameterized query to execute
     * @param orderedParameters Arguments to bind to the parameters defined in the query. the order is important. 
     * @return The entities fetched by executing the given query
     */
    public List<T> find(String namedQuery, Object... orderedParameters) {
        final Query query = getEntityManager().createNamedQuery(namedQuery);
        int indexParam = 0;
        for (Object p : orderedParameters) {
            query.setParameter(++indexParam, p);
        }
        return (List<T>) query.getResultList();
    }
    
    /**
     * Retrieves the unique entity, result of the execution of a given query.
     * 
     * @param namedQuery Parameterized query to execute
     * @param orderedParameters Arguments to bind to the parameters defined in the query. the order is important. 
     * @return The entity fetched by executing the given query
     * @throws NotFoundException Raised if no entity is returnd by the execution of the given query.
     */
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

    /**
     * Checks if a given entity exists
     * 
     * @param entity The entity to search 
     * @return The instance of found entity
     * @throws EntityNotFoundException Raised if the entity does not exists.
     */
    public T checkExists(T entity) throws EntityNotFoundException {
        final T entityFromDatabase = getEntityManager().find(entityClass, entity.getId());

        if (entityFromDatabase == null) {
            throw new EntityNotFoundException(entity);
        }

        return entityFromDatabase;
    }
    
    /**
     * Return the number of existing entities
     * 
     * @return The number of existing entities
     */
    public int count() {
        CriteriaQuery cq = getEntityManager().getCriteriaBuilder().createQuery();
        Root<T> rt = cq.from(entityClass);
        cq.select(getEntityManager().getCriteriaBuilder().count(rt));
        Query q = getEntityManager().createQuery(cq);
        return ((Long) q.getSingleResult()).intValue();
    }
    
    /**
     * Return the number of entities returned by the execution of a given query
     * 
     * @param namedQuery Parameterized query to execute
     * @param orderedParameters Arguments to bind to the parameters defined in the query. the order is important. 
     * @return The number of entities returned by the execution of a given query
     */
    public int count(String namedQuery, Object... orderedParameters) {

        final Query query = getEntityManager().createNamedQuery(namedQuery);
        int indexParam = 0;
        for (Object p : orderedParameters) {
            query.setParameter(++indexParam, p);
        }
        return ((Long) query.getSingleResult()).intValue();
    }
    
    /**
     * Synchronizes in-memory persistence context with database.
     */
    public void flush() {
         getEntityManager().flush();
    }
    
    /**
     * <code>EntityManager</code> is provided by concrete classes as
     * they can be easylly get injected an instance of
     * <code>EntityManager</code> through <code>@PersistenceContext<code>
     * annotation.
     * <br/>
     * <pre>
     * {@code
     *  &#64;Stateless
     *  public class myEJBImpl implements myEJB {
     *
     *      &#64PersistenceContext
     *      private EntityManager entityManager;
     *
     *      private final JPABaseDAO<MyEntity> myEntityDAO = new JPABaseDAO<MyEntity>(){
     *          &#64Override
     *          public EntityManager getEntityManager() {
     *              return entityManager;
     *          }     
     *      };
     * 
     *      ...
     *   }
     * }
     * </pre>
     * @return An EntityManager implementation
     */
    public abstract EntityManager getEntityManager();
}
