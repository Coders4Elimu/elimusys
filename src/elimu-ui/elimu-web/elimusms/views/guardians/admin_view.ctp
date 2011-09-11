<div class="guardians view">
<h2><?php  __('Guardian');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ParentID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guardian['Guardian']['ParentID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('FirstName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guardian['Guardian']['FirstName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('LastName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guardian['Guardian']['LastName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('MiddleName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guardian['Guardian']['MiddleName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guardian['Guardian']['Gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $guardian['Guardian']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guardian', true), array('action' => 'edit', $guardian['Guardian']['ParentID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Guardian', true), array('action' => 'delete', $guardian['Guardian']['ParentID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $guardian['Guardian']['ParentID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guardians', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guardian', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
