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

package org.coders4africa.elimu.domain;

import javax.persistence.GenerationType;
import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.MappedSuperclass;
import javax.persistence.Transient;
import javax.xml.bind.annotation.XmlTransient;
import static org.coders4africa.elimu.jpa.JPAUtils.implementationClass;

/**
 * This class is the base class for all Elimu entities.<br/>
 * This class introduce a hierarchy that permit to apply
 * common rules on elimu entities regardless of their real type.<br/>
 * For exemple with that we can simply search an entity based on
 * a identifier. The real entity type to will be determined at run-time
 * to find the table to search into.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
@MappedSuperclass
public class BaseEntity implements Serializable {

    private static final long serialVersionUID = 1L;
    
    @Id
    @Column(nullable = false)
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long id;
    @Transient
    private final Class<? extends BaseEntity> entityClass;

    protected BaseEntity() {
        entityClass = implementationClass(getClass());
    }
     
    
    /**
     * This Getter/Setter pair is made transient for JAX-B processor
     * cause as they are public they are seen twice by JAX-B wich tries to
     * bind the "id" field at this level but at the subclass level too.
     * that leades to this error :
     * <pre>
     *  Class has two properties of the same name "id"
     * </pre>
     * To resolve it all subclasses must override these mothods :
     * <pre>
     * {@code 
     *   &#64;Override
     *   &#64;XmlAttribute
     *   public Long getId() {
     *       return super.getId();
     *   }
     *
     *   &#64;Override
     *   public void setId(Long id) {
     *       super.setId(id);
     *   }
     * }
     * </pre>
     */
    @XmlTransient
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }    
}
