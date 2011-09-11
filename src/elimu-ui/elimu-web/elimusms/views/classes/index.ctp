<div class="classes index">
	<h2><?php __('Classes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ClassID');?></th>
			<th><?php echo $this->Paginator->sort('TeacherID');?></th>
			<th><?php echo $this->Paginator->sort('SubjectID');?></th>
			<th><?php echo $this->Paginator->sort('Name');?></th>
			<th><?php echo $this->Paginator->sort('Code');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($classes as $class):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $class['Class']['ClassID']; ?>&nbsp;</td>
		<td><?php echo $class['Class']['TeacherID']; ?>&nbsp;</td>
		<td><?php echo $class['Class']['SubjectID']; ?>&nbsp;</td>
		<td><?php echo $class['Class']['Name']; ?>&nbsp;</td>
		<td><?php echo $class['Class']['Code']; ?>&nbsp;</td>
		<td><?php echo $class['Class']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $class['Class']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $class['Class']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $class['Class']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $class['Class']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Class', true), array('action' => 'add')); ?></li>
	</ul>
</div>