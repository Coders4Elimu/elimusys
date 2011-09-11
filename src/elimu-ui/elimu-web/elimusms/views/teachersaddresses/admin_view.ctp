<div class="teachersaddresses view">
<h2><?php  __('Teachersaddress');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teachersaddress['Teachersaddress']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Owner Teacher Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($teachersaddress['OwnerTeacherAddress']['AddressLine1'], array('controller' => 'addresses', 'action' => 'view', $teachersaddress['OwnerTeacherAddress']['AddressID'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Owner Teacher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($teachersaddress['OwnerTeacher']['FirstName'], array('controller' => 'teachers', 'action' => 'view', $teachersaddress['OwnerTeacher']['TeacherID'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StartDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teachersaddress['Teachersaddress']['StartDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('EndDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teachersaddress['Teachersaddress']['EndDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teachersaddress['Teachersaddress']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Teachersaddress', true), array('action' => 'edit', $teachersaddress['Teachersaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Teachersaddress', true), array('action' => 'delete', $teachersaddress['Teachersaddress']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teachersaddress['Teachersaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachersaddresses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teachersaddress', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses', true), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner Teacher Address', true), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
