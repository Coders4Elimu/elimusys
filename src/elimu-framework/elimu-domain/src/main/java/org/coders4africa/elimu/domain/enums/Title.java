
package org.coders4africa.elimu.domain.enums;

/**
 * Enumeration of Elimu supported titles.
 * 
 * @author Martial SOMDA
 * @since 1.0
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
