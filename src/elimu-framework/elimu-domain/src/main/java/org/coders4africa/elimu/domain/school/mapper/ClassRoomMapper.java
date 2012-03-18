
package org.coders4africa.elimu.domain.school.mapper;

import org.apache.commons.lang.StringUtils;
import org.coders4africa.elimu.domain.mapper.BaseMapper;
import org.coders4africa.elimu.domain.school.ClassRoom;

/**
 *
 * @author Martial SOMDA
 * @since 1.
 */
public class ClassRoomMapper extends BaseMapper<ClassRoom> {

    @Override
    public ClassRoom merge(ClassRoom transientEntityToMerge, ClassRoom attachedEntity) {

        if (transientEntityToMerge != null) {
            
            if(StringUtils.isNotEmpty(transientEntityToMerge.getClassName()) &&
                    !StringUtils.equals(transientEntityToMerge.getClassName(), attachedEntity.getClassName())){
              attachedEntity.setClassName(transientEntityToMerge.getClassName());  
            }
        }
        
        return attachedEntity;
    }
    
}
