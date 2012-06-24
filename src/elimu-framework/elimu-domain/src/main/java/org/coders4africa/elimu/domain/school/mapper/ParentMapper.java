
package org.coders4africa.elimu.domain.school.mapper;

import org.coders4africa.elimu.domain.mapper.BaseMapper;
import org.coders4africa.elimu.domain.mapper.PersonMapper;
import org.coders4africa.elimu.domain.school.Parent;

/**
 *
 * @author Martial SOMDA
 * @since 1.0
 */
public class ParentMapper extends BaseMapper<Parent> {

    @Override
    public Parent merge(Parent transientEntityToMerge, Parent attachedEntity) {
        new PersonMapper().merge(transientEntityToMerge, attachedEntity);
        return attachedEntity;
    }
    
}
