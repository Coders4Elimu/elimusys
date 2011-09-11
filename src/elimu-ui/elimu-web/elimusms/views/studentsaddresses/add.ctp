<div class="studentsaddresses form">
<?php echo $this->Form->create('Studentsaddress');?>
	<fieldset>
 		<legend><?php __('Add Studentsaddress'); ?></legend>
	<?php
		echo $this->Form->input('AddressID');
		echo $this->Form->input('StudentID');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('EndDate');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Studentsaddresses', true), array('action' => 'index'));?></li>
	</ul>
</div>