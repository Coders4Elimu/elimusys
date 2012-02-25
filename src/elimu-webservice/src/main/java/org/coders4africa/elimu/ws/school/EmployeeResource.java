/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.ws.school;

import java.util.List;
import javax.ejb.EJB;
import javax.ejb.Stateless;
import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.service.school.EmployeeService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 *
 * @author MSOMDA
 */
@Path("/employees")
@Stateless
public class EmployeeResource {
    
    private Logger logger = LoggerFactory.getLogger(getClass());
    
    @EJB
    private EmployeeService service;

    
    @PUT
    @Consumes({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public Response updateEmployeeInformation(Employee employee) {
        service.updateEmployeeInformation(employee);
        return Response.ok().entity(employee).build();
    }
    
    @GET
    @Path("{id}")
    @Produces({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public Employee findSchool(@PathParam("id") Long id) {
        return service.findEmployee(id);
    }
    
    @GET
    @Produces({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public List<Employee> retrieveAllSchools() {
        return service.retrieveAllEmployees();
    }
    
    @GET
    @Path("count")
    @Produces(MediaType.TEXT_PLAIN)
    public String count() {
        return service.countEmployees();
    }

}
