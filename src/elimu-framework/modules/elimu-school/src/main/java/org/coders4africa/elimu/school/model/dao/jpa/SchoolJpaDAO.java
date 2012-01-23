/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model.dao.jpa;

import org.coders4africa.elimu.model.dao.jpa.AbstractJpaDAO;
import org.coders4africa.elimu.school.model.School;
import org.springframework.stereotype.Repository;

/**
 *
 * @author MSOMDA
 */
@Repository
public class SchoolJpaDAO extends AbstractJpaDAO<School> {
  
    public SchoolJpaDAO() {
        super(School.class);
    }
}
