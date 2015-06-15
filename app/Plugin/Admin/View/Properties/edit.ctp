<div class="properties form">
    <?php echo $this->Form->create('Property', array('type' => 'file')); ?>
    <fieldset>
        <legend><?php echo __('Edit Property'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Upload->uploadImage($this->request->data['Property'], 'Property.photo', array('style' => 'small'));
        echo $this->Form->input('Property.photo', array('type' => 'file'));
        echo $this->Form->input('name');
        echo $this->Form->input('description', array('class' => 'ckeditor'));
        echo $this->Form->input('status', array('type' => 'hidden'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
