<div class="subjects view">
<h2><?php  __('Subject');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SubjectID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['SubjectID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['Name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject', true), array('action' => 'edit', $subject['Subject']['SubjectID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subject', true), array('action' => 'delete', $subject['Subject']['SubjectID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['SubjectID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Courses', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Courses');?></h3>
	<?php if (!empty($subject['SubjectCourses'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('ClassID'); ?></th>
		<th><?php __('TeacherID'); ?></th>
		<th><?php __('SubjectID'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Code'); ?></th>
		<th><?php __('Details'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subject['SubjectCourses'] as $subjectCourses):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subjectCourses['ClassID'];?></td>
			<td><?php echo $subjectCourses['TeacherID'];?></td>
			<td><?php echo $subjectCourses['SubjectID'];?></td>
			<td><?php echo $subjectCourses['Name'];?></td>
			<td><?php echo $subjectCourses['Code'];?></td>
			<td><?php echo $subjectCourses['Details'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'courses', 'action' => 'view', $subjectCourses['ClassID'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'courses', 'action' => 'edit', $subjectCourses['ClassID'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'courses', 'action' => 'delete', $subjectCourses['ClassID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectCourses['ClassID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject Courses', true), array('controller' => 'courses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
