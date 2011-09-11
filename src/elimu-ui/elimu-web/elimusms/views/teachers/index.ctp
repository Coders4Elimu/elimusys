<?php 
	$this->Html->addCrumb(__('View Teachers', true), '/teachers');
?>
<div class="teachers index">
	<h2><?php __('Teachers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('School Name','SchoolID');?></th>
			<th><?php echo $this->Paginator->sort('First Name','FirstName');?></th>
			<th><?php echo $this->Paginator->sort('Middle Name','MiddleName');?></th>
			<th><?php echo $this->Paginator->sort('Last Name','LastName');?></th>
			<th><?php echo $this->Paginator->sort('Phone Number','Phone');?></th>
			<th><?php echo $this->Paginator->sort('Date Of Birth','dob');?></th>
			<th><?php echo $this->Paginator->sort('Details','Resume');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($teachers as $teacher):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $schoolOptions[$teacher['Teacher']['SchoolID']]; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['FirstName']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['MiddleName']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['LastName']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['Phone']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['dob']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $teacher['Teacher']['TeacherID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $teacher['Teacher']['TeacherID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $teacher['Teacher']['TeacherID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacher['Teacher']['TeacherID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Teacher', true), array('action' => 'add')); ?></li>
	</ul>
</div>