<div class="studentparents index">
	<h2><?php __('Studentparents');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID');?></th>
			<th><?php echo $this->Paginator->sort('StudentID');?></th>
			<th><?php echo $this->Paginator->sort('ParentID');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th><?php echo $this->Paginator->sort('Relationship');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($studentparents as $studentparent):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $studentparent['Studentparent']['ID']; ?>&nbsp;</td>
		<td><?php echo $studentparent['Studentparent']['StudentID']; ?>&nbsp;</td>
		<td><?php echo $studentparent['Studentparent']['ParentID']; ?>&nbsp;</td>
		<td><?php echo $studentparent['Studentparent']['Details']; ?>&nbsp;</td>
		<td><?php echo $studentparent['Studentparent']['Relationship']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $studentparent['Studentparent']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $studentparent['Studentparent']['ID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $studentparent['Studentparent']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $studentparent['Studentparent']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Studentparent', true), array('action' => 'add')); ?></li>
	</ul>
</div>