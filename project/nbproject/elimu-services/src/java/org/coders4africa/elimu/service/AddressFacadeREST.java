/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.service;

import java.util.List;
import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import org.coders4africa.elimu.model.Address;

/**
 *
 * @author MSOMDA
 */
@Stateless
@Path("/addresses/")
public class AddressFacadeREST extends AbstractFacade<Address> {
    @PersistenceContext(unitName = "elimu-services-pu")
    private EntityManager em;

    public AddressFacadeREST() {
        super(Address.class);
    }

    @POST
    @Override
    @Consumes({"application/xml", "application/json"})
    public void create(Address entity) {
        super.create(entity);
    }

    @PUT
    @Override
    @Consumes({"application/xml", "application/json"})
    public void edit(Address entity) {
        super.edit(entity);
    }

    @DELETE
    @Path("{id}")
    public void remove(@PathParam("id") Long id) {
        super.remove(super.find(id));
    }

    @GET
    @Path("{id}")
    @Produces({"application/xml", "application/json"})
    public Address find(@PathParam("id") Long id) {
        return super.find(id);
    }

    @GET
    @Override
    @Produces({"application/xml", "application/json"})
    public List<Address> findAll() {
        return super.findAll();
    }

    @GET
    @Path("{from}/{to}")
    @Produces({"application/xml", "application/json"})
    public List<Address> findRange(@PathParam("from") Integer from, @PathParam("to") Integer to) {
        return super.findRange(new int[]{from, to});
    }

    @GET
    @Path("count")
    @Produces("text/plain")
    public String countREST() {
        return String.valueOf(super.count());
    }

    @java.lang.Override
    protected EntityManager getEntityManager() {
        return em;
    }
    
}
