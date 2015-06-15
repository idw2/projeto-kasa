<div class="banners form">
    <?php echo $this->Form->create('Banner', array('type' => 'file')); ?>
    <fieldset>
        <legend><?php echo __('Edit Banner'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Upload->uploadImage($this->request->data['Banner'], 'Banner.photo', array('style' => 'medium'));
        echo $this->Form->input('Banner.photo', array('type' => 'file'));
        echo $this->Form->input('status', array('type' => 'hidden'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
