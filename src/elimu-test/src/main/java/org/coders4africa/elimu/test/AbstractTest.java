/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.test;

import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.junit4.AbstractJUnit4SpringContextTests;

/**
 *
 * @author MSOMDA
 */
@ContextConfiguration(locations={"classpath:spring/test-context.xml"},
       // loader=TestContextLoader.class,
        inheritLocations=true)
public class AbstractTest extends AbstractJUnit4SpringContextTests {
    
    
}
