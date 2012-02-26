
package org.coders4africa.elimu.service.exception;

import org.coders4africa.elimu.domain.BaseEntity;

/**
 * Base class for exceptions that refer to a {@link BaseEntity}.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public class AbstractEntityException extends Exception {
    
    private final BaseEntity entity;

  /**
   * Constructor.
   *
   * @param message Text message describing the exception.
   * @param entity The entity to which the exception refers.
   */
  protected AbstractEntityException(String message, BaseEntity entity) {
    super(message);

    this.entity = entity;
  }

  /**
   * The entity that was not found in the database.
   *
   * @return The entity.
   */
  public final BaseEntity getEntity() {
    return entity;
  }
}
