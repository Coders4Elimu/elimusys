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

package org.coders4africa.elimu.jpa;

/**
 * This class contains convenient methods to ease the use of JPA through the whole application
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public class JPAUtils {
    
   public  static <T> Class<? extends T> implementationClass(Class<? extends T> c) {

    Class<?> result = c;

    while (!result.getPackage().getName().startsWith("org.coders4africa.elimu")) {
      result =  result.getSuperclass();

      if (result == null) {
        throw new IllegalArgumentException("Not an Elimu entity");
      }
    }

    // This is safe if and only if T is in an Elimu package.
    return (Class<? extends T>) result;
  }
}
