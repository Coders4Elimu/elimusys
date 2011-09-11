<div class="schools form">
<?php echo $this->Form->create('School');?>
	<fieldset>
 		<legend><?php __('Admin Edit School'); ?></legend>
	<?php
		echo $this->Form->input('SchoolID');
		echo $this->Form->input('LanguageID');
		echo $this->Form->input('Name');
		echo $this->Form->input('Phone');
		echo $this->Form->input('Fax');
		echo $this->Form->input('WebSite');
		echo $this->Form->input('Email');
		echo $this->Form->input('DateFounded');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('School.SchoolID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('School.SchoolID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Schools', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Schoolsaddresses', true), array('controller' => 'schoolsaddresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Official Addresses', true), array('controller' => 'schoolsaddresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schoolstaffs', true), array('controller' => 'schoolstaffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Work Staffers', true), array('controller' => 'schoolstaffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Teachers', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>