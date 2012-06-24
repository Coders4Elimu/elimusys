/*
 * #%L
 * elimu-service
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
