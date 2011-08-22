<div class="subjects index">
	<h2><?php __('Subjects');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SubjectID');?></th>
			<th><?php echo $this->Paginator->sort('Name');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subjects as $subject):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subject['Subject']['SubjectID']; ?>&nbsp;</td>
		<td><?php echo $subject['Subject']['Name']; ?>&nbsp;</td>
		<td><?php echo $subject['Subject']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $subject['Subject']['SubjectID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subject['Subject']['SubjectID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subject['Subject']['SubjectID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['SubjectID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subject', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Courses', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>