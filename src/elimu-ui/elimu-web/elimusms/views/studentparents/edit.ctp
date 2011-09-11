<div class="studentparents form">
<?php echo $this->Form->create('Studentparent');?>
	<fieldset>
 		<legend><?php __('Edit Studentparent'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('StudentID');
		echo $this->Form->input('ParentID');
		echo $this->Form->input('Details');
		echo $this->Form->input('Relationship');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Studentparent.ID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Studentparent.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Studentparents', true), array('action' => 'index'));?></li>
	</ul>
</div>