<div class="schoolsaddresses index">
	<h2><?php __('Schoolsaddresses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID');?></th>
			<th><?php echo $this->Paginator->sort('AddressID');?></th>
			<th><?php echo $this->Paginator->sort('SchoolID');?></th>
			<th><?php echo $this->Paginator->sort('StartDate');?></th>
			<th><?php echo $this->Paginator->sort('EndDate');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($schoolsaddresses as $schoolsaddress):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $schoolsaddress['Schoolsaddress']['ID']; ?>&nbsp;</td>
		<td><?php echo $schoolsaddress['Schoolsaddress']['AddressID']; ?>&nbsp;</td>
		<td><?php echo $schoolsaddress['Schoolsaddress']['SchoolID']; ?>&nbsp;</td>
		<td><?php echo $schoolsaddress['Schoolsaddress']['StartDate']; ?>&nbsp;</td>
		<td><?php echo $schoolsaddress['Schoolsaddress']['EndDate']; ?>&nbsp;</td>
		<td><?php echo $schoolsaddress['Schoolsaddress']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $schoolsaddress['Schoolsaddress']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $schoolsaddress['Schoolsaddress']['ID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $schoolsaddress['Schoolsaddress']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schoolsaddress['Schoolsaddress']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Schoolsaddress', true), array('action' => 'add')); ?></li>
	</ul>
</div>