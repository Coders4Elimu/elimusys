/*
 * #%L
 * elimu-test
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
