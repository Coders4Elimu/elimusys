<div class="studentsclasses view">
<h2><?php  __('Studentsclass');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsclass['Studentsclass']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ClassID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsclass['Studentsclass']['ClassID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StudentID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsclass['Studentsclass']['StudentID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StartDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsclass['Studentsclass']['StartDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('EndDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentsclass['Studentsclass']['EndDate']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studentsclass', true), array('action' => 'edit', $studentsclass['Studentsclass']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Studentsclass', true), array('action' => 'delete', $studentsclass['Studentsclass']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $studentsclass['Studentsclass']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentsclasses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentsclass', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
