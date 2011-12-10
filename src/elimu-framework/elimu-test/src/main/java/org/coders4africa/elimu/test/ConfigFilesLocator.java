/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.test;

/**
 *
 * @author MSOMDA
 */
public class ConfigFilesLocator {
    
    public final static String TEST_CONFIG = "classpath:spring/test-context.xml";
    public final static String TEST_TRANSACTION = "classpath:spring/test-transaction.xml";
    public final static String DAOs = "classpath*:spring/config-dao*.xml";
}
