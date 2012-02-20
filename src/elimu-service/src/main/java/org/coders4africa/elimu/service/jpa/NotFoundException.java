/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.service.jpa;

import javax.ejb.ApplicationException;

/**
 *
 * @author MSOMDA
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
