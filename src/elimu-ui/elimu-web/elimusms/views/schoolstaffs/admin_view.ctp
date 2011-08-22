<div class="schoolstaffs view">
<h2><?php  __('Schoolstaff');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SchoolStaffID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaff['Schoolstaff']['SchoolStaffID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SchoolID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaff['Schoolstaff']['SchoolID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('FirstName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaff['Schoolstaff']['FirstName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('LastName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaff['Schoolstaff']['LastName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('MiddleName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaff['Schoolstaff']['MiddleName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaff['Schoolstaff']['Role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaff['Schoolstaff']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schoolstaff', true), array('action' => 'edit', $schoolstaff['Schoolstaff']['SchoolStaffID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Schoolstaff', true), array('action' => 'delete', $schoolstaff['Schoolstaff']['SchoolStaffID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schoolstaff['Schoolstaff']['SchoolStaffID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schoolstaffs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schoolstaff', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
