
package org.coders4africa.elimu.ws.exception.mapper;

import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import javax.ws.rs.ext.ExceptionMapper;
import javax.ws.rs.ext.Provider;
import org.coders4africa.elimu.service.exception.EntityNotFoundException;

/**
 * This mapper will be used by jersey framework to translate the
 * elimu runtime {@link EntityNotFoundExceptionMapper} exception 
 * into web clients comprehensible HTTP response error code
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Provider
public class EntityNotFoundExceptionMapper implements ExceptionMapper<EntityNotFoundException> {

    @Override
    public Response toResponse(EntityNotFoundException ex) {
        return Response.status(Response.Status.NOT_FOUND)
                .entity(ex.getMessage())
                .type(MediaType.TEXT_PLAIN)
                .build();
    }
    
}
