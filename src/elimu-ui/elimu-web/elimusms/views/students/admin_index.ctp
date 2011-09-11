<div class="students index">
	<h2><?php __('Students');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('StudentID');?></th>
			<th><?php echo $this->Paginator->sort('SchoolID');?></th>
			<th><?php echo $this->Paginator->sort('FirstName');?></th>
			<th><?php echo $this->Paginator->sort('LastName');?></th>
			<th><?php echo $this->Paginator->sort('MiddleName');?></th>
			<th><?php echo $this->Paginator->sort('Gender');?></th>
			<th><?php echo $this->Paginator->sort('dob');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($students as $student):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $student['Student']['StudentID']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['SchoolID']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['FirstName']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['LastName']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['MiddleName']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['Gender']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['dob']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $student['Student']['StudentID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $student['Student']['StudentID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $student['Student']['StudentID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $student['Student']['StudentID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student', true), array('action' => 'add')); ?></li>
	</ul>
</div>