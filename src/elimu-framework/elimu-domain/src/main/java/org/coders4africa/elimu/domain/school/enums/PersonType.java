/*
 * #%L
 * elimu-domain
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

package org.coders4africa.elimu.domain.school.enums;

import java.io.Serializable;
import java.util.HashSet;
import java.util.Set;

/**
 * This class define contants to distinguish school actors.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public class PersonType implements Serializable {
    
    public static final String EMPLOYEE = "EMPLOYEE";
    public static final String STUDENT = "STUDENT";
    public static final String PARENT = "PARENT";
    
    private static final Set<String> types;
    
    static{
        types = new HashSet<String>();
        types.add(EMPLOYEE.toUpperCase());
        types.add(STUDENT.toUpperCase());
        types.add(PARENT.toUpperCase());
    }
    
    public static boolean isKnownType(String type){
        return types.contains(type.toUpperCase());
    }
}
