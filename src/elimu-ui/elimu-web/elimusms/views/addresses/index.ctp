<div class="addresses index">
	<h2><?php __('Addresses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('AddressID');?></th>
			<th><?php echo $this->Paginator->sort('AddressLine1');?></th>
			<th><?php echo $this->Paginator->sort('AddressLine2');?></th>
			<th><?php echo $this->Paginator->sort('City');?></th>
			<th><?php echo $this->Paginator->sort('Country');?></th>
			<th><?php echo $this->Paginator->sort('PostalCode');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($addresses as $address):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $address['Address']['AddressID']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['AddressLine1']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['AddressLine2']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['City']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['Country']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['PostalCode']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $address['Address']['AddressID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $address['Address']['AddressID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $address['Address']['AddressID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $address['Address']['AddressID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Address', true), array('action' => 'add')); ?></li>
	</ul>
</div>