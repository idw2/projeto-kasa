<div class="agents form">
<?php echo $this->Form->create('Agent', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Agent'); ?></legend>
	<?php
		echo $this->Form->input('id');
                echo $this->Upload->uploadImage($this->request->data['Agent'], 'Agent.photo', array('style' => 'big'));
		echo $this->Form->input('Agent.photo', array('type' => 'file'));
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('cell_phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('description', array('class' => 'ckeditor'));
		echo $this->Form->input('google_plus');
		echo $this->Form->input('facebook');
		echo $this->Form->input('twitter');
		echo $this->Form->input('instagram');
		echo $this->Form->input('status', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>