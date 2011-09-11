<div class="guardians index">
	<h2><?php __('Guardians');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ParentID');?></th>
			<th><?php echo $this->Paginator->sort('FirstName');?></th>
			<th><?php echo $this->Paginator->sort('LastName');?></th>
			<th><?php echo $this->Paginator->sort('MiddleName');?></th>
			<th><?php echo $this->Paginator->sort('Gender');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($guardians as $guardian):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $guardian['Guardian']['ParentID']; ?>&nbsp;</td>
		<td><?php echo $guardian['Guardian']['FirstName']; ?>&nbsp;</td>
		<td><?php echo $guardian['Guardian']['LastName']; ?>&nbsp;</td>
		<td><?php echo $guardian['Guardian']['MiddleName']; ?>&nbsp;</td>
		<td><?php echo $guardian['Guardian']['Gender']; ?>&nbsp;</td>
		<td><?php echo $guardian['Guardian']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $guardian['Guardian']['ParentID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $guardian['Guardian']['ParentID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $guardian['Guardian']['ParentID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $guardian['Guardian']['ParentID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Guardian', true), array('action' => 'add')); ?></li>
	</ul>
</div>