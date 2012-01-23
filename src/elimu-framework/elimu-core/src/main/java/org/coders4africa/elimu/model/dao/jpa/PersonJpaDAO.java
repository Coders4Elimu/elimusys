/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.model.dao.jpa;

import org.coders4africa.elimu.model.Person;
import org.springframework.stereotype.Repository;

/**
 *
 * @author MSOMDA
 */
@Repository
public class PersonJpaDAO extends AbstractJpaDAO<Person> {
    
    public PersonJpaDAO(){
        super(Person.class);
    }
}
