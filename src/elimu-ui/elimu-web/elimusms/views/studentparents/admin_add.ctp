<div class="studentparents form">
<?php echo $this->Form->create('Studentparent');?>
	<fieldset>
 		<legend><?php __('Admin Add Studentparent'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Studentparents', true), array('action' => 'index'));?></li>
	</ul>
</div>