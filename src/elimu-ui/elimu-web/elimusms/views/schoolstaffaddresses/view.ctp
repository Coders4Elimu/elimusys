<div class="schoolstaffaddresses view">
<h2><?php  __('Schoolstaffaddress');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaffaddress['Schoolstaffaddress']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('AddressID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaffaddress['Schoolstaffaddress']['AddressID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SchoolStaffID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaffaddress['Schoolstaffaddress']['SchoolStaffID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StartDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaffaddress['Schoolstaffaddress']['StartDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('EndDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaffaddress['Schoolstaffaddress']['EndDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolstaffaddress['Schoolstaffaddress']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schoolstaffaddress', true), array('action' => 'edit', $schoolstaffaddress['Schoolstaffaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Schoolstaffaddress', true), array('action' => 'delete', $schoolstaffaddress['Schoolstaffaddress']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schoolstaffaddress['Schoolstaffaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schoolstaffaddresses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schoolstaffaddress', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
