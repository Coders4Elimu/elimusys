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

import java.util.LinkedHashSet;
import java.util.Set;

/**
 * Enumeation of Elimu supported grade groups
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public enum GradeGroups {
    
    ELEMENTATY {
        Set<Grade> classesLevels = new LinkedHashSet<Grade>();
        public boolean contains(Grade classLevel){
           return GradeGroups.contains(classesLevels, classLevel);
        }
    },
    
    PRIMARY {
        Set<Grade> classesLevels = new LinkedHashSet<Grade>();
        public boolean contains(Grade classLevel){
           return GradeGroups.contains(classesLevels, classLevel);
        }
    },

    SECCONDARY {
        Set<Grade> classesLevels = new LinkedHashSet<Grade>();
        public boolean contains(Grade classLevel){
           return GradeGroups.contains(classesLevels, classLevel);
        }
    };
    
    public static boolean contains(Set<Grade> classes,Grade classLevel){
        return classes.contains(classLevel);
    }
    public abstract boolean contains(Grade classLevel);
}
