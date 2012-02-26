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

import javax.ejb.ApplicationException;

/**
 * Exception raised when something could not be found.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@ApplicationException
public class NotFoundException extends Exception {
    
    public NotFoundException(String message,Throwable cause) {
        super(message,cause);
    }
    
    public NotFoundException(String message) {
        super(message);
    }

    public NotFoundException(Throwable cause) {
        super(cause);
    }
}
