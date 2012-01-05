/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.school.model.enums;

import java.util.LinkedHashSet;
import java.util.Set;

/**
 *
 * @author MSOMDA
 */
public enum SchoolClassesLevelsGroups {
    
    ELEMENTATY {
        Set<SchoolClassesLevels> classesLevels = new LinkedHashSet<SchoolClassesLevels>();
        public boolean contains(SchoolClassesLevels classLevel){
           return contains(classesLevels, classLevel);
        }
    },
    
    PRIMARY {
        Set<SchoolClassesLevels> classesLevels = new LinkedHashSet<SchoolClassesLevels>();
        public boolean contains(SchoolClassesLevels classLevel){
           return contains(classesLevels, classLevel);
        }
    },

    SECCONDARY {
        Set<SchoolClassesLevels> classesLevels = new LinkedHashSet<SchoolClassesLevels>();
        public boolean contains(SchoolClassesLevels classLevel){
           return contains(classesLevels, classLevel);
        }
    };
    
    public boolean contains(Set<SchoolClassesLevels> classes,SchoolClassesLevels classLevel){
        return classes.contains(classLevel);
    }
    public abstract boolean contains(SchoolClassesLevels classLevel);
}
