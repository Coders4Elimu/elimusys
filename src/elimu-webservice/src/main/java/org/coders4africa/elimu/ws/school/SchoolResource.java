/*
 * #%L
 * elimu-webservice
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

package org.coders4africa.elimu.ws.school;

import java.net.URI;
import java.util.List;
import javax.ejb.EJB;
import javax.ejb.Stateless;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import javax.ws.rs.core.UriInfo;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.domain.school.School;
import org.coders4africa.elimu.service.exception.EntityNotFoundException;
import org.coders4africa.elimu.service.exception.NotFoundException;
import org.coders4africa.elimu.service.school.SchoolService;

/**
 * This class exposes {@link SchoolService} as a RestFull web service.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Path("/schools")
@Stateless
public class SchoolResource {
    
    @EJB
    private SchoolService service;
    
    @Context 
    private UriInfo uriInfo;
    
    @POST
    @Consumes({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public Response registerSchool(School school) {
        service.registerSchool(school);
        
        if(null != school.getId()){
            URI createdUri = uriInfo.getAbsolutePath();
            return Response.created(createdUri).build();
        }
        
        return Response.noContent().build();
    }

    @PUT
    @Consumes({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public Response updateSchoolInformation(School school) {
        service.updateSchoolInformation(school);
        return Response.ok().entity(school).build();
    }

    @DELETE
    @Path("{id}")
    public Response unregisterSchool(@PathParam("id") Long id) {
        service.unregisterSchool(id);
        return Response.ok().build();
    }

    @GET
    @Path("{id}")
    @Produces({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public School findSchool(@PathParam("id") Long id) {
        return service.findSchool(id);
    }

    @GET
    @Produces({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public List<School> retrieveAllSchools() {
        return service.retrieveAllSchools();
    }

    @GET
    @Path("count")
    @Produces(MediaType.TEXT_PLAIN)
    public String count() {
        return service.countSchools();
    }
    
    @GET
    @Path("{id}/employees")
    @Produces({
        MediaType.APPLICATION_XML,
        MediaType.APPLICATION_JSON
    })
    public List<Employee> retrieveAllEmployees(@PathParam("id") Long schoolId) {
        return service.retrieveAllEmployees(schoolId);
    }
    
    @POST
    @Path("{id}/employees")
    @Consumes({
        MediaType.APPLICATION_XML,
        MediaType.APPLICATION_JSON
    })
    public Response registerEmployee(Employee employee, @PathParam("id") Long schoolId) throws NotFoundException{
        service.registerEmployee(employee,schoolId);
        
        if(null != employee.getId()){
            URI createdUri = uriInfo.getAbsolutePath();
            return Response.created(createdUri).build();
        }
        
        return Response.noContent().build();
    }
    
    @DELETE
    @Path("{id}/employees/{employeeId}")
    public Response unregisterEmployee(@PathParam("id") Long id, @PathParam("employeeId") Long employeeId) throws NotFoundException, EntityNotFoundException {
        service.unregisterEmployee(id,employeeId);
        return Response.ok().build();
    }

    @GET
    @Path("{id}/employees/count")
    @Produces(MediaType.TEXT_PLAIN)
    public String count(@PathParam("id") Long schoolId) {
        return service.countEmployees(schoolId);
    }
}
