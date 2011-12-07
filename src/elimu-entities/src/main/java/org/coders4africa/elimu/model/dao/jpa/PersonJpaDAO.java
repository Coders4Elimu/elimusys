/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao.jpa;

import org.coders4africa.elimu.model.Person;

/**
 *
 * @author MSOMDA
 */
public class PersonJpaDAO extends AbstractJpaDAO<Person> {
    
    public PersonJpaDAO(){
        super(Person.class);
    }
}
