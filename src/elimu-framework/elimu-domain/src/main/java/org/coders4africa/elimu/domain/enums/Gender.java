
package org.coders4africa.elimu.domain.enums;

/**
 * Enumeration of Elimu supported Genders
 * 
 * @author Martial SOMDA
 * @since 1.0
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
