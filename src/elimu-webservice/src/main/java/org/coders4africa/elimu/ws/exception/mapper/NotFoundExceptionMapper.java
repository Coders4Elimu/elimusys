/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.ws.exception.mapper;

import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import javax.ws.rs.ext.ExceptionMapper;
import javax.ws.rs.ext.Provider;
import org.coders4africa.elimu.service.jpa.NotFoundException;

/**
 * This mapper will be use by jersey framework to translate the
 * elimu runtime {@link NotFoundException} exception 
 * into web clients comprehensible HTTP response error code
 * 
 * @author MSOMDA
 */
@Provider
public class NotFoundExceptionMapper implements ExceptionMapper<NotFoundException> {

    @Override
    public Response toResponse(NotFoundException ex) {
        return Response.status(Response.Status.NOT_FOUND)
                .entity(ex.getMessage())
                .type(MediaType.TEXT_PLAIN)
                .build();
    }
    
}
