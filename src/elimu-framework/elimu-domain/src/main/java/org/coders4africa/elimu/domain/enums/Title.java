/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.domain.enums;

/**
 *
 * @author MSOMDA
 */
public enum Title {
    
    Mr("Mr.","Mister"),
    Ms("Ms.","Miss"),
    Mrs("Mrs.","Madam");
    
    private String name;
    private String fullName;
    
    private Title(String name,String fullName){
        this.name = name;
        this.fullName = fullName;
    }
    
    public String getName(){
        return name;
    }
    
    public String getFullName(){
        return fullName;
    }
}
