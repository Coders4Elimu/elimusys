/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.domain.school.enums;

/**
 *
 * @author MSOMDA
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
