/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao;

import java.util.List;

/**
 *
 * @author MSOMDA
 */
public interface GenericDAO<T> {
    
    void save(T entity);
    void update(T entity);
    void delete(T entity);
    T findById(Object id);
    List<T> findAll();
    int count();
    void flush();
}
