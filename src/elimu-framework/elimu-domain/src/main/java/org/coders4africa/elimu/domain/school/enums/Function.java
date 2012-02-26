
package org.coders4africa.elimu.domain.school.enums;

/**
 * Enumeration of Elimu supported school's functions for their employees.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public enum Function {
    
    Guardian("Guardian","guardian"),
    Teacher("Teacher","teacher"),
    Director("Director","director"),
    Principal("Principal","principal");
    
    private String name;
    private String description;
    
    private Function(String name,String description){
        this.name = name;
        this.description = description;
    }
    
    public String getName(){
        return name;
    }
    
    public String getDescription(){
        return description;
    }
}
