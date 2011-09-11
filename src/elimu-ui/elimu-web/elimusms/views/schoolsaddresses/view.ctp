<div class="schoolsaddresses view">
<h2><?php  __('Schoolsaddress');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolsaddress['Schoolsaddress']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('AddressID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolsaddress['Schoolsaddress']['AddressID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SchoolID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolsaddress['Schoolsaddress']['SchoolID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StartDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolsaddress['Schoolsaddress']['StartDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('EndDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolsaddress['Schoolsaddress']['EndDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schoolsaddress['Schoolsaddress']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schoolsaddress', true), array('action' => 'edit', $schoolsaddress['Schoolsaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Schoolsaddress', true), array('action' => 'delete', $schoolsaddress['Schoolsaddress']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schoolsaddress['Schoolsaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schoolsaddresses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schoolsaddress', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
