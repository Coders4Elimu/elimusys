/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
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
 * This class is the base class for all Elimu entities.
 * This class introduce a hierarchy that permit to apply
 * common rules on elimu entities regardless of their real type.
 * For exemple with that we can simlpy search an entity based on
 * the entity id. We can check at run time the real entity type to
 * find the table to search into.
 * 
 * @author MSOMDA
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
     * All subclasses must override these mothods :
     * <pre>
     *   @Override
     *   @XmlAttribute
     *   public Long getId() {
     *       return super.getId();
     *   }
     *
     *   @Override
     *   public void setId(Long id) {
     *       super.setId(id);
     *   }
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
