
package org.coders4africa.elimu.ws.school;

import java.util.List;
import javax.ejb.EJB;
import javax.ejb.Stateless;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import org.coders4africa.elimu.domain.school.Employee;
import org.coders4africa.elimu.service.exception.EntityNotFoundException;
import org.coders4africa.elimu.service.exception.NotFoundException;
import org.coders4africa.elimu.service.school.EmployeeService;

/**
 * This class exposes {@link EmployeeService} as a RestFull web service.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@Path("/employees")
@Stateless
public class EmployeeResource {
    
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
    public Employee findEmployee(@PathParam("id") Long id) {
        return service.findEmployee(id);
    }
    
    @GET
    @Produces({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public List<Employee> retrieveAllEmployees() {
        return service.retrieveAllEmployees();
    }
    
    @DELETE
    @Path("{id}")
    public Response deleteEmployee(@PathParam("id") Long id) throws NotFoundException, EntityNotFoundException {
        service.deleteEmployee(id);
        return Response.ok().build();
    }
    
    @GET
    @Path("count")
    @Produces(MediaType.TEXT_PLAIN)
    public String count() {
        return service.countEmployees();
    }
}
