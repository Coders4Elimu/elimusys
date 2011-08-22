<div class="schoolstaffaddresses index">
	<h2><?php __('Schoolstaffaddresses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID');?></th>
			<th><?php echo $this->Paginator->sort('AddressID');?></th>
			<th><?php echo $this->Paginator->sort('SchoolStaffID');?></th>
			<th><?php echo $this->Paginator->sort('StartDate');?></th>
			<th><?php echo $this->Paginator->sort('EndDate');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($schoolstaffaddresses as $schoolstaffaddress):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $schoolstaffaddress['Schoolstaffaddress']['ID']; ?>&nbsp;</td>
		<td><?php echo $schoolstaffaddress['Schoolstaffaddress']['AddressID']; ?>&nbsp;</td>
		<td><?php echo $schoolstaffaddress['Schoolstaffaddress']['SchoolStaffID']; ?>&nbsp;</td>
		<td><?php echo $schoolstaffaddress['Schoolstaffaddress']['StartDate']; ?>&nbsp;</td>
		<td><?php echo $schoolstaffaddress['Schoolstaffaddress']['EndDate']; ?>&nbsp;</td>
		<td><?php echo $schoolstaffaddress['Schoolstaffaddress']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $schoolstaffaddress['Schoolstaffaddress']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $schoolstaffaddress['Schoolstaffaddress']['ID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $schoolstaffaddress['Schoolstaffaddress']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schoolstaffaddress['Schoolstaffaddress']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Schoolstaffaddress', true), array('action' => 'add')); ?></li>
	</ul>
</div>