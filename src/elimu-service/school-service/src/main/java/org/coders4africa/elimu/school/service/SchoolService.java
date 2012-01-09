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
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.context.annotation.Scope;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

/**
 *
 * @author MSOMDA
 */
@Path("/schools")
@Service
@Transactional
@Scope("request")
public class SchoolService {
    
    private Logger logger = LoggerFactory.getLogger(getClass());
    
    @Resource(name="schoolDAO")
    private SchoolJpaDAO schoolDAO;
    
    @POST
    @Consumes({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public void create(School school) {
        logger.info("About to create a new school");
        schoolDAO.save(school);
    }

    @PUT
    @Consumes({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public void edit(School school) {
        logger.info("About to update a school");
        schoolDAO.update(school);
    }

    @DELETE
    @Path("{id}")
    public void remove(@PathParam("id") Long id) {
        logger.info("About to delete a school");
        schoolDAO.delete(schoolDAO.findById(id));
    }

    @GET
    @Path("{id}")
    @Produces({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public School find(@PathParam("id") Long id) {
        logger.info("Looking for a school");
        return schoolDAO.findById(id);
    }

    @GET
    @Produces({
        MediaType.APPLICATION_XML, 
        MediaType.APPLICATION_JSON
    })
    public List<School> findAll() {
        logger.info("Load all schools");
        return schoolDAO.findAll();
    }

    @GET
    @Path("count")
    @Produces(MediaType.TEXT_PLAIN)
    public String count() {
        return String.valueOf(schoolDAO.count());
    }
}
