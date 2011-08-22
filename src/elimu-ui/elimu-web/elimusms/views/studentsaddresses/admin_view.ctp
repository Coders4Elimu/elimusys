<div class="studentsaddresses view">
<h2><?php  __('Studentsaddress');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsaddress['Studentsaddress']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('AddressID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsaddress['Studentsaddress']['AddressID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StudentID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsaddress['Studentsaddress']['StudentID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StartDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsaddress['Studentsaddress']['StartDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('EndDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsaddress['Studentsaddress']['EndDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsaddress['Studentsaddress']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studentsaddress', true), array('action' => 'edit', $studentsaddress['Studentsaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Studentsaddress', true), array('action' => 'delete', $studentsaddress['Studentsaddress']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $studentsaddress['Studentsaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentsaddresses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentsaddress', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
