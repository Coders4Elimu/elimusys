package org.coders4africa.elimu.domain.mapper;

import org.apache.commons.lang.StringUtils;
import org.coders4africa.elimu.domain.Address;

/**
 *
 * @author Martial SOMDA
 * @since 1.0
 */
public class AddressMapper extends BaseMapper<Address> {

    @Override
    public Address merge(Address transientEntityToMerge, Address attachedEntity) {
        
        if (transientEntityToMerge != null) {
            if (StringUtils.isNotEmpty(transientEntityToMerge.getCelPhone())
                    && !StringUtils.equals(attachedEntity.getCelPhone(), transientEntityToMerge.getCelPhone())) {
                attachedEntity.setCelPhone(transientEntityToMerge.getCelPhone());
            }
            if (StringUtils.isNotEmpty(transientEntityToMerge.getCity())
                    && !StringUtils.equals(attachedEntity.getCity(), transientEntityToMerge.getCity())) {
                attachedEntity.setCity(transientEntityToMerge.getCity());
            }
            if (StringUtils.isNotEmpty(transientEntityToMerge.getCountry())
                    && !StringUtils.equals(attachedEntity.getCountry(), transientEntityToMerge.getCountry())) {
                attachedEntity.setCountry(transientEntityToMerge.getCountry());
            }
            if (StringUtils.isNotEmpty(transientEntityToMerge.getDetails())
                    && !StringUtils.equals(attachedEntity.getDetails(), transientEntityToMerge.getDetails())) {
                attachedEntity.setDetails(transientEntityToMerge.getDetails());
            }
            if (StringUtils.isNotEmpty(transientEntityToMerge.getEmail())
                    && !StringUtils.equals(attachedEntity.getEmail(), transientEntityToMerge.getEmail())) {
                attachedEntity.setEmail(transientEntityToMerge.getEmail());
            }
            if (StringUtils.isNotEmpty(transientEntityToMerge.getLandPhone())
                    && !StringUtils.equals(attachedEntity.getLandPhone(), transientEntityToMerge.getLandPhone())) {
                attachedEntity.setLandPhone(transientEntityToMerge.getLandPhone());
            }
            if (StringUtils.isNotEmpty(transientEntityToMerge.getState())
                    && !StringUtils.equals(attachedEntity.getState(), transientEntityToMerge.getState())) {
                attachedEntity.setState(transientEntityToMerge.getState());
            }
            if (StringUtils.isNotEmpty(transientEntityToMerge.getStreet())
                    && !StringUtils.equals(attachedEntity.getStreet(), transientEntityToMerge.getStreet())) {
                attachedEntity.setStreet(transientEntityToMerge.getStreet());
            }
            if (StringUtils.isNotEmpty(transientEntityToMerge.getZipCode())
                    && !StringUtils.equals(attachedEntity.getZipCode(), transientEntityToMerge.getZipCode())) {
                attachedEntity.setZipCode(transientEntityToMerge.getZipCode());
            }
        }
        return attachedEntity;
    }
}
