/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.service;

import com.sun.jersey.api.client.WebResource;
import com.sun.jersey.core.header.MediaTypes;
import com.sun.jersey.spi.spring.container.servlet.SpringServlet;
import com.sun.jersey.test.framework.AppDescriptor;
import com.sun.jersey.test.framework.JerseyTest;
import com.sun.jersey.test.framework.WebAppDescriptor;
import com.sun.jersey.test.framework.spi.container.TestContainerFactory;
import com.sun.jersey.test.framework.spi.container.embedded.glassfish.EmbeddedGlassFishTestContainerFactory;
import javax.ws.rs.core.MediaType;
import org.junit.Test;
import org.springframework.web.context.ContextLoaderListener;
import static org.junit.Assert.*;

/**
 *
 * @author MSOMDA
 */
public class SchoolServiceTest extends JerseyTest {

    @Override
    protected TestContainerFactory getTestContainerFactory() {
        return new EmbeddedGlassFishTestContainerFactory();
    }

    @Override
    protected AppDescriptor configure() {
        return new WebAppDescriptor.Builder()
                .contextPath("school-service")
                .contextParam("parentContextKey", "")
                .contextParam("locatorFactorySelector", "")
                .contextParam("contextConfigLocation", "")
                .servletClass(SpringServlet.class)
                .contextListenerClass(ContextLoaderListener.class)
                .build();
    }
    
    
    
    /**
     * Test checks that an application.wadl file is generated.
     */
    //@Test
    public void testApplicationWadl() {
        WebResource webResource = resource();
        String wadl = webResource.path("application.wadl").accept(MediaTypes.WADL)
                .get(String.class);
        assertTrue("Method: testApplicationWadl \nMessage: Something wrong, the returned " +
                "WADL's length is not > 0", wadl.length() > 0);
    }

    /**
     * Test of create method, of class SchoolService.
     */
    //@Test
    public void testGetAll() {
        WebResource webResource = resource();
        
        String schools = webResource.path("schools").accept(MediaType.APPLICATION_XML).get(String.class);
        
        assertTrue("Courses does not contain English 101", schools.contains("English 101") );
     
    }

}
