/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.service;

import java.util.List;
import javax.annotation.Resource;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import org.coders4africa.elimu.school.model.School;
import org.coders4africa.elimu.school.model.dao.jpa.SchoolJpaDAO;
import org.springframework.context.annotation.Scope;
import org.springframework.stereotype.Component;

/**
 *
 * @author MSOMDA
 */
@Path("/schools")
@Component
@Scope("request")
public class SchoolService {
    
    @Resource(name="schoolDAO")
    private SchoolJpaDAO schoolDAO;
    
    @POST
    @Consumes({MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON})
    public void create(School school) {
        schoolDAO.save(school);
    }

    @PUT
    @Consumes({MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON})
    public void edit(School school) {
        schoolDAO.update(school);
    }

    @DELETE
    @Path("{id}")
    public void remove(@PathParam("id") Long id) {
        schoolDAO.delete(schoolDAO.findById(id));
    }

    @GET
    @Path("{id}")
    @Produces({MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON})
    public School find(@PathParam("id") Long id) {
        return schoolDAO.findById(id);
    }

    @GET
    @Produces({MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON})
    public List<School> findAll() {
        return schoolDAO.findAll();
    }

    @GET
    @Path("count")
    @Produces(MediaType.TEXT_PLAIN)
    public String count() {
        return String.valueOf(schoolDAO.count());
    }
}
