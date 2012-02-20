/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.ws.school;

import java.util.List;
import javax.inject.Inject;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.domain.school.School;
import org.coders4africa.elimu.service.jpa.NotFoundException;
import org.coders4africa.elimu.service.school.SchoolService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.context.annotation.Scope;
import org.springframework.stereotype.Component;

/**
 *
 * @author MSOMDA
 */
@Path("/schools")
@Scope("request")
@Component
public class SchoolResource {
    
    private Logger logger = LoggerFactory.getLogger(getClass());
    
    @Inject
    private SchoolService service;
    
    @POST
    @Consumes({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public void registerSchool(School school) {
        service.registerSchool(school);
    }

    @PUT
    @Consumes({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public void updateSchoolInformation(School school) {
        service.updateSchoolInformation(school);
    }

    @DELETE
    @Path("{id}")
    public void unregisterSchool(@PathParam("id") Long id) {
        service.unregisterSchool(id);
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
    public void registerEmployee(Employee employee, @PathParam("id") Long schoolId) throws NotFoundException{
        service.registerEmployee(employee,schoolId);
    }

    @GET
    @Path("{id}/employees/count")
    @Produces(MediaType.TEXT_PLAIN)
    public String count(@PathParam("id") Long schoolId) {
        return service.countEmployees(schoolId);
    }
}
