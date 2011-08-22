<div class="teachersaddresses index">
	<h2><?php __('Teachersaddresses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID');?></th>
			<th><?php echo $this->Paginator->sort('AddressID');?></th>
			<th><?php echo $this->Paginator->sort('TeacherID');?></th>
			<th><?php echo $this->Paginator->sort('StartDate');?></th>
			<th><?php echo $this->Paginator->sort('EndDate');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($teachersaddresses as $teachersaddress):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $teachersaddress['Teachersaddress']['ID']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($teachersaddress['OwnerTeacherAddress']['AddressLine1'], array('controller' => 'addresses', 'action' => 'view', $teachersaddress['OwnerTeacherAddress']['AddressID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($teachersaddress['OwnerTeacher']['FirstName'], array('controller' => 'teachers', 'action' => 'view', $teachersaddress['OwnerTeacher']['TeacherID'])); ?>
		</td>
		<td><?php echo $teachersaddress['Teachersaddress']['StartDate']; ?>&nbsp;</td>
		<td><?php echo $teachersaddress['Teachersaddress']['EndDate']; ?>&nbsp;</td>
		<td><?php echo $teachersaddress['Teachersaddress']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $teachersaddress['Teachersaddress']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $teachersaddress['Teachersaddress']['ID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $teachersaddress['Teachersaddress']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teachersaddress['Teachersaddress']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Teachersaddress', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses', true), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner Teacher Address', true), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>