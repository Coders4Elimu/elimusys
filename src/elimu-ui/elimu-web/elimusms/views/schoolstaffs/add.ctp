<div class="schoolstaffs form">
<?php echo $this->Form->create('Schoolstaff');?>
	<fieldset>
 		<legend><?php __('Add Schoolstaff'); ?></legend>
	<?php
		echo $this->Form->input('SchoolID');
		echo $this->Form->input('FirstName');
		echo $this->Form->input('LastName');
		echo $this->Form->input('MiddleName');
		echo $this->Form->input('Role');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Schoolstaffs', true), array('action' => 'index'));?></li>
	</ul>
</div>