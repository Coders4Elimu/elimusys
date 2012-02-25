package org.coders4africa.elimu.service.exception;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


import javax.ejb.ApplicationException;
import org.coders4africa.elimu.domain.BaseEntity;

/**
 *
 * @author MSOMDA
 */
@ApplicationException
public class EntityNotFoundException extends AbstractEntityException {
    
    public EntityNotFoundException(BaseEntity entity) {
    super("Could not find '" + entity + "'", entity);
  }
}
