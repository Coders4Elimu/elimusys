<div class="schools view">
<h2><?php  __('School');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SchoolID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['SchoolID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('LanguageID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['LanguageID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['Name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['Phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['Fax']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('WebSite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['WebSite']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['Email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('DateFounded'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['DateFounded']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit School', true), array('action' => 'edit', $school['School']['SchoolID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete School', true), array('action' => 'delete', $school['School']['SchoolID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $school['School']['SchoolID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schoolsaddresses', true), array('controller' => 'schoolsaddresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Official Addresses', true), array('controller' => 'schoolsaddresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schoolstaffs', true), array('controller' => 'schoolstaffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Work Staffers', true), array('controller' => 'schoolstaffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Teachers', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Schoolsaddresses');?></h3>
	<?php if (!empty($school['TheSchoolOfficialAddresses'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('ID'); ?></th>
		<th><?php __('AddressID'); ?></th>
		<th><?php __('SchoolID'); ?></th>
		<th><?php __('StartDate'); ?></th>
		<th><?php __('EndDate'); ?></th>
		<th><?php __('Details'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($school['TheSchoolOfficialAddresses'] as $theSchoolOfficialAddresses):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $theSchoolOfficialAddresses['ID'];?></td>
			<td><?php echo $theSchoolOfficialAddresses['AddressID'];?></td>
			<td><?php echo $theSchoolOfficialAddresses['SchoolID'];?></td>
			<td><?php echo $theSchoolOfficialAddresses['StartDate'];?></td>
			<td><?php echo $theSchoolOfficialAddresses['EndDate'];?></td>
			<td><?php echo $theSchoolOfficialAddresses['Details'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'schoolsaddresses', 'action' => 'view', $theSchoolOfficialAddresses['ID'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'schoolsaddresses', 'action' => 'edit', $theSchoolOfficialAddresses['ID'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'schoolsaddresses', 'action' => 'delete', $theSchoolOfficialAddresses['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $theSchoolOfficialAddresses['ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New The School Official Addresses', true), array('controller' => 'schoolsaddresses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Schoolstaffs');?></h3>
	<?php if (!empty($school['TheSchoolWorkStaffers'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('SchoolStaffID'); ?></th>
		<th><?php __('SchoolID'); ?></th>
		<th><?php __('FirstName'); ?></th>
		<th><?php __('LastName'); ?></th>
		<th><?php __('MiddleName'); ?></th>
		<th><?php __('Role'); ?></th>
		<th><?php __('Details'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($school['TheSchoolWorkStaffers'] as $theSchoolWorkStaffers):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $theSchoolWorkStaffers['SchoolStaffID'];?></td>
			<td><?php echo $theSchoolWorkStaffers['SchoolID'];?></td>
			<td><?php echo $theSchoolWorkStaffers['FirstName'];?></td>
			<td><?php echo $theSchoolWorkStaffers['LastName'];?></td>
			<td><?php echo $theSchoolWorkStaffers['MiddleName'];?></td>
			<td><?php echo $theSchoolWorkStaffers['Role'];?></td>
			<td><?php echo $theSchoolWorkStaffers['Details'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'schoolstaffs', 'action' => 'view', $theSchoolWorkStaffers['SchoolStaffID'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'schoolstaffs', 'action' => 'edit', $theSchoolWorkStaffers['SchoolStaffID'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'schoolstaffs', 'action' => 'delete', $theSchoolWorkStaffers['SchoolStaffID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $theSchoolWorkStaffers['SchoolStaffID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New The School Work Staffers', true), array('controller' => 'schoolstaffs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Teachers');?></h3>
	<?php if (!empty($school['TheSchoolTeachers'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('TeacherID'); ?></th>
		<th><?php __('SchoolID'); ?></th>
		<th><?php __('FirstName'); ?></th>
		<th><?php __('LastName'); ?></th>
		<th><?php __('MiddleName'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Dob'); ?></th>
		<th><?php __('Details'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($school['TheSchoolTeachers'] as $theSchoolTeachers):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $theSchoolTeachers['TeacherID'];?></td>
			<td><?php echo $theSchoolTeachers['SchoolID'];?></td>
			<td><?php echo $theSchoolTeachers['FirstName'];?></td>
			<td><?php echo $theSchoolTeachers['LastName'];?></td>
			<td><?php echo $theSchoolTeachers['MiddleName'];?></td>
			<td><?php echo $theSchoolTeachers['Phone'];?></td>
			<td><?php echo $theSchoolTeachers['dob'];?></td>
			<td><?php echo $theSchoolTeachers['Details'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'teachers', 'action' => 'view', $theSchoolTeachers['TeacherID'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'teachers', 'action' => 'edit', $theSchoolTeachers['TeacherID'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'teachers', 'action' => 'delete', $theSchoolTeachers['TeacherID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $theSchoolTeachers['TeacherID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New The School Teachers', true), array('controller' => 'teachers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
