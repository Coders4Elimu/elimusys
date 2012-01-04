/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model.enums;

/**
 *
 * @author MSOMDA
 */
public enum SchoolEmployeeFunctions {
    
    Guardian("Guardian","guardian"),
    Teacher("Teacher","teacher"),
    Director("Director","director");
    
    private String name;
    private String description;
    
    private SchoolEmployeeFunctions(String name,String description){
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
