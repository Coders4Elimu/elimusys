/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.domain.enums;

/**
 *
 * @author MSOMDA
 */
public enum Gender {
    
    Male("Male"),
    Female("Female");
    
    private String name;
    
    private Gender(String name){
        this.name = name;
    }
    
    public String getName(){
        return name;
    }
}
