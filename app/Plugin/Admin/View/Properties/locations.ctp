<div class="locations form">
    <?php echo $this->Form->create('Location'); ?>
    <fieldset class="gllpLatlonPicker">
        <legend><?php echo __('Edit Location'); ?></legend>
        <?php
        echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id));
        echo $this->Form->input('propertie_id', array('type' => 'hidden', 'value' => $propertie_id));
        echo $this->Form->input('address', array('class' => 'gllpSearchField'));
        ?>
        <input type="button" class="gllpSearchButton" value="search" style="">
        <div class="gllpMap">Google Maps</div>

        <style>
            .gllpSearchButton{
                display: inline-block;
                width: auto;
                float: right;
                margin-top: -65px;
                position: relative;
                z-index: 100;
            }

            .gllpMap{
                width: 100% !important;
                height: 500px !important;
            }    
        </style>

        <?php
        echo $this->Form->input('latitude', array('class' => 'gllpLatitude'));
        echo $this->Form->input('longitude', array('class' => 'gllpLongitude'));
        echo $this->Form->input('city');
        echo $this->Form->input('state');
        echo $this->Form->input('neighborhood');
        echo $this->Form->input('zip_code');
        ?>

        <input type="hidden" class="gllpZoom" value="3"/>
    </fieldset>


    <?php echo $this->Form->end(__('Submit')); ?>
</div>
