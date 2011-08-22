<div class="teachersaddresses form">
<?php echo $this->Form->create('Teachersaddress');?>
	<fieldset>
 		<legend><?php __('Add Teachersaddress'); ?></legend>
	<?php
		echo $this->Form->input('AddressID');
		echo $this->Form->input('TeacherID');
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

		<li><?php echo $this->Html->link(__('List Teachersaddresses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses', true), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner Teacher Address', true), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>