<div class="studentparents view">
<h2><?php  __('Studentparent');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentparent['Studentparent']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StudentID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentparent['Studentparent']['StudentID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ParentID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentparent['Studentparent']['ParentID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentparent['Studentparent']['Details']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Relationship'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentparent['Studentparent']['Relationship']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studentparent', true), array('action' => 'edit', $studentparent['Studentparent']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Studentparent', true), array('action' => 'delete', $studentparent['Studentparent']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $studentparent['Studentparent']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentparents', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentparent', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
