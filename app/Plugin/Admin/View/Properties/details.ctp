<div class="details form">
    <?php echo $this->Form->create('Detail'); ?>
    <fieldset>
        <legend><?php echo __('Edit Detail'); ?></legend>
        <?php
        echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id));
        echo $this->Form->input('propertie_id', array('type' => 'hidden', 'value' => $propertie_id));
        echo $this->Form->input('price');
        echo $this->Form->input('area');
        echo $this->Form->input('bedrooms');
        echo $this->Form->input('bathrooms');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
