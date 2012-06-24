
package org.coders4africa.elimu.domain.school.mapper;

import org.apache.commons.lang.StringUtils;
import org.coders4africa.elimu.domain.mapper.AddressMapper;
import org.coders4africa.elimu.domain.mapper.BaseMapper;
import org.coders4africa.elimu.domain.school.School;

/**
 *
 * @author Martial SOMDA
 * @since 1.0
 */
public class SchoolMapper extends BaseMapper<School> {

    @Override
    public School merge(School transientEntityToMerge, School attachedEntity) {

        if (transientEntityToMerge != null) {
            
            if(StringUtils.isNotEmpty(transientEntityToMerge.getName())
                 && !StringUtils.equals(transientEntityToMerge.getName(), attachedEntity.getName())){
                attachedEntity.setName(transientEntityToMerge.getName());
            }
            if(StringUtils.isNotEmpty(transientEntityToMerge.getFax())
                 && !StringUtils.equals(transientEntityToMerge.getFax(), attachedEntity.getFax())){
                attachedEntity.setFax(transientEntityToMerge.getFax());
            }
            if(StringUtils.isNotEmpty(transientEntityToMerge.getWebsite())
                 && !StringUtils.equals(transientEntityToMerge.getWebsite(), attachedEntity.getWebsite())){
                attachedEntity.setWebsite(transientEntityToMerge.getWebsite());
            }
            new AddressMapper().merge(transientEntityToMerge.getAddress(),attachedEntity.getAddress());
            
        }        
        return attachedEntity;
    }
    
}
