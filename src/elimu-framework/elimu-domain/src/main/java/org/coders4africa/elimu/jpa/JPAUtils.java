/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.jpa;

/**
 *
 * @author MSOMDA
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
