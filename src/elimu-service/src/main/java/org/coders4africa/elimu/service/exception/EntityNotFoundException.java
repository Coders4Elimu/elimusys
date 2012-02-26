package org.coders4africa.elimu.service.exception;

import javax.ejb.ApplicationException;
import org.coders4africa.elimu.domain.BaseEntity;

/**
 * Exception raised when a entity could not be found in the persistence context
 * or retrieve from database.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@ApplicationException
public class EntityNotFoundException extends AbstractEntityException {

    /**
     * Constructor
     * @param entity The entity not found. 
     */
    public EntityNotFoundException(BaseEntity entity) {
        super("Could not find '" + entity + "'", entity);
    }
}
