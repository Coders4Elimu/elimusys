package org.coders4africa.elimu.domain.school.mapper;

import org.coders4africa.elimu.domain.mapper.BaseMapper;
import org.coders4africa.elimu.domain.mapper.PersonMapper;
import org.coders4africa.elimu.domain.school.Employee;

/**
 *
 * @author Martial SOMDA
 * @since 1.0
 */
public class EmployeeMapper extends BaseMapper<Employee> {

    @Override
    public Employee merge(Employee transientEntityToMerge, Employee attachedEntity) {
        
        if (transientEntityToMerge != null) {

            if (transientEntityToMerge.getFunction() != null
                    && transientEntityToMerge.getFunction() != attachedEntity.getFunction()) {
                attachedEntity.setFunction(transientEntityToMerge.getFunction());
            }
            
            new PersonMapper().merge(transientEntityToMerge, attachedEntity);
            new SchoolMapper().merge(transientEntityToMerge.getSchool(), attachedEntity.getSchool());
        }
        return attachedEntity;
    }
}
