<div class="guardians form">
<?php echo $this->Form->create('Guardian');?>
	<fieldset>
 		<legend><?php __('Admin Add Guardian'); ?></legend>
	<?php
		echo $this->Form->input('FirstName');
		echo $this->Form->input('LastName');
		echo $this->Form->input('MiddleName');
		echo $this->Form->input('Gender');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guardians', true), array('action' => 'index'));?></li>
	</ul>
</div>