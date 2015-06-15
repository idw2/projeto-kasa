<div class="banners form">
    <?php echo $this->Form->create('Banner', array('type' => 'file')); ?>
    <fieldset>
        <legend><?php echo __('Add Banner'); ?></legend>
        <?php
        echo $this->Form->input('Banner.photo', array('type' => 'file'));
        echo $this->Form->input('status', array('type' => 'hidden', 'value' => 0));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>