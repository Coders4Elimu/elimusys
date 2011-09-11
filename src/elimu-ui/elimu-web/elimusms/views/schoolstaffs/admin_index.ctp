<div class="schoolstaffs index">
	<h2><?php __('Schoolstaffs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SchoolStaffID');?></th>
			<th><?php echo $this->Paginator->sort('SchoolID');?></th>
			<th><?php echo $this->Paginator->sort('FirstName');?></th>
			<th><?php echo $this->Paginator->sort('LastName');?></th>
			<th><?php echo $this->Paginator->sort('MiddleName');?></th>
			<th><?php echo $this->Paginator->sort('Role');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($schoolstaffs as $schoolstaff):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $schoolstaff['Schoolstaff']['SchoolStaffID']; ?>&nbsp;</td>
		<td><?php echo $schoolstaff['Schoolstaff']['SchoolID']; ?>&nbsp;</td>
		<td><?php echo $schoolstaff['Schoolstaff']['FirstName']; ?>&nbsp;</td>
		<td><?php echo $schoolstaff['Schoolstaff']['LastName']; ?>&nbsp;</td>
		<td><?php echo $schoolstaff['Schoolstaff']['MiddleName']; ?>&nbsp;</td>
		<td><?php echo $schoolstaff['Schoolstaff']['Role']; ?>&nbsp;</td>
		<td><?php echo $schoolstaff['Schoolstaff']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $schoolstaff['Schoolstaff']['SchoolStaffID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $schoolstaff['Schoolstaff']['SchoolStaffID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $schoolstaff['Schoolstaff']['SchoolStaffID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schoolstaff['Schoolstaff']['SchoolStaffID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Schoolstaff', true), array('action' => 'add')); ?></li>
	</ul>
</div>