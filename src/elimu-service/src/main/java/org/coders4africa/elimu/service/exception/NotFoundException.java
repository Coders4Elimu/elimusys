
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
