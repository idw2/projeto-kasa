<div class="properties form">
    <?php echo $this->Form->create('Property', array('type' => 'file')); ?>
    <fieldset>
        <legend><?php echo __('Add Property'); ?></legend>
        <?php
        echo $this->Form->input('Property.photo', array('type' => 'file'));
        echo $this->Form->input('name');
        echo $this->Form->input('description', array('class' => 'ckeditor'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
