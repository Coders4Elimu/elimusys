/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.domain.school.enums;

import java.io.Serializable;
import java.util.HashSet;
import java.util.Set;

/**
 *
 * @author MSOMDA
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
