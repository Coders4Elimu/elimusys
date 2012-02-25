package org.coders4africa.elimu.service.exception;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


import org.coders4africa.elimu.domain.BaseEntity;

/**
 * Base class for exceptions that refer to a {@link BaseEntity}.
 * 
 * @author MSOMDA
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
