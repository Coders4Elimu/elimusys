<div class="parentsaddresses view">
<h2><?php  __('Parentsaddress');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parentsaddress['Parentsaddress']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ParentID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parentsaddress['Parentsaddress']['ParentID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('AddressID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parentsaddress['Parentsaddress']['AddressID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StartDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parentsaddress['Parentsaddress']['StartDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('EnDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parentsaddress['Parentsaddress']['EnDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parentsaddress['Parentsaddress']['Details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parentsaddress', true), array('action' => 'edit', $parentsaddress['Parentsaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Parentsaddress', true), array('action' => 'delete', $parentsaddress['Parentsaddress']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $parentsaddress['Parentsaddress']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parentsaddresses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parentsaddress', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
