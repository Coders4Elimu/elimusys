
package org.coders4africa.elimu.domain.mapper;

import org.coders4africa.elimu.domain.BaseEntity;

/**
 * This interface is implemented by entities
 * to merge themselve with other ones.<br/>
 * Mappers are convenient way for users to make
 * updates of entities given a ninimum of informations.
 * Obvious, tis facility or user introduce a complexity
 * of our persistence layer that now have to perform
 * some merged to get the informations about the entity
 * that where not given by user before updating an entity.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public abstract class BaseMapper<T extends BaseEntity> {
    
    /**
     * Return a transient instance that is the result
     * of a merge between the current instance of <code>Mergeable<code>
     * This is for updates purpose.
     * and the entity to merge with.<br/>
     * For each field to merge :<br/>
     * <ul>
     * <li>If transientEntityToMerge's one is set take this one</li>
     * <li>Otherwise take the value of the current instance</li>
     * </ul>
     * NB : don't merge collections cause the rule is that they are not cascaded during updates
     * 
     * TODO change the class description
     * 
     * @param transientEntityToMerge The entity to merge
     * @return A transient instance which is the result of a merge between the two entities
     */
    public abstract T merge(T transientEntityToMerge, T attachedEntity);
}
