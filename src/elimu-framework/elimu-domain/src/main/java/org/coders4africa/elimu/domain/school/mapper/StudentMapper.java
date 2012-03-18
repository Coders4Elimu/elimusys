package org.coders4africa.elimu.domain.school.mapper;

import org.coders4africa.elimu.domain.mapper.BaseMapper;
import org.coders4africa.elimu.domain.mapper.PersonMapper;
import org.coders4africa.elimu.domain.school.Student;

/**
 *
 * @author Martial SOMDA
 * @since 1.0
 */
public class StudentMapper extends BaseMapper<Student> {

    @Override
    public Student merge(Student transientEntityToMerge, Student attachedEntity) {

        if (transientEntityToMerge != null) {

            if (transientEntityToMerge.getGrade() != null
                    && transientEntityToMerge.getGrade() != attachedEntity.getGrade()) {

                attachedEntity.setGrade(transientEntityToMerge.getGrade());

                new PersonMapper().merge(transientEntityToMerge, attachedEntity);
                new SchoolMapper().merge(transientEntityToMerge.getSchool(), attachedEntity.getSchool());
                new ClassRoomMapper().merge(transientEntityToMerge.getClassroom(), attachedEntity.getClassroom());

            }

        }
        return attachedEntity;
    }
}
