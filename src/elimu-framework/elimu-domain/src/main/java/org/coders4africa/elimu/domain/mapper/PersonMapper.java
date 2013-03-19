package org.coders4africa.elimu.domain.mapper;

import org.apache.commons.lang.StringUtils;
import org.apache.commons.lang.time.DateUtils;
import org.coders4africa.elimu.domain.Person;

/**
 *
 * @author Martial SOMDA
 * @since 1.0
 */
public class PersonMapper extends BaseMapper<Person> {

    @Override
    public Person merge(Person transientEntityToMerge, Person attachedEntity) {

        if (transientEntityToMerge != null) {
            
            if (transientEntityToMerge.getBirthDayDate() != null
                    && !DateUtils.isSameDay(attachedEntity.getBirthDayDate(), transientEntityToMerge.getBirthDayDate())) {
                attachedEntity.setBirthDayDate(transientEntityToMerge.getBirthDayDate());
            }
            if (transientEntityToMerge.getFirstName() != null
                    && !StringUtils.equals(attachedEntity.getFirstName(), transientEntityToMerge.getFirstName())) {
                attachedEntity.setFirstName(transientEntityToMerge.getFirstName());
            }
            if (transientEntityToMerge.getGender() != null
                    && attachedEntity.getGender() != transientEntityToMerge.getGender()) {
                attachedEntity.setGender(transientEntityToMerge.getGender());
            }
            if (transientEntityToMerge.getLastName() != null
                    && !StringUtils.equals(attachedEntity.getLastName(), transientEntityToMerge.getLastName())) {
                attachedEntity.setLastName(transientEntityToMerge.getLastName());
            }
            if (transientEntityToMerge.getMiddleName() != null
                    && !StringUtils.equals(attachedEntity.getMiddleName(), transientEntityToMerge.getMiddleName())) {
                attachedEntity.setMiddleName(transientEntityToMerge.getMiddleName());
            }
            if (transientEntityToMerge.getTitle() != null
                    && attachedEntity.getTitle() != transientEntityToMerge.getTitle()) {
                attachedEntity.setTitle(transientEntityToMerge.getTitle());
            }
            if (transientEntityToMerge.getType() != null
                    && !StringUtils.equals(attachedEntity.getType(), transientEntityToMerge.getType())) {
                attachedEntity.setType(transientEntityToMerge.getType());
            }
            new AddressMapper().merge(transientEntityToMerge.getAddress(), attachedEntity.getAddress());
        }
        
        return attachedEntity;
    }
}
