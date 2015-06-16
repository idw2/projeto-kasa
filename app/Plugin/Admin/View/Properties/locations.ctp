<div class="col-sm-12 col-lg-6">
    <?php echo $this->Form->create('Location', array('type' => 'file', 'inputDefaults' => array(
            'div' => array('class' => 'form-group')
    ))); ?>
    <fieldset class="gllpLatlonPicker">
        <legend><?php echo __('Edit Location'); ?></legend>
        <?php
        echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id));
        echo $this->Form->input('propertie_id', array('type' => 'hidden', 'value' => $propertie_id));
        echo $this->Form->input('address', array('class' => 'gllpSearchField form-control'));
        ?>
        
        <div class="form-group">
        <input type="button" class="gllpSearchButton btn btn-default" value="search">
        </div>
        
        <div class="gllpMap">Google Maps</div>

        <style>
          .gllpMap{
                width: 100% !important;
                height: 500px !important;
            }    
        </style>

        <?php
        echo $this->Form->input('latitude', array('class' => 'gllpLatitude form-control'));
        echo $this->Form->input('longitude', array('class' => 'gllpLongitude form-control'));
        echo $this->Form->input('city', array('class'=> 'form-control'));
        echo $this->Form->input('state', array('class'=> 'form-control'));
        echo $this->Form->input('neighborhood', array('class'=> 'form-control'));
        echo $this->Form->input('zip_code', array('class'=> 'form-control'));
        ?>

        <input type="hidden" class="gllpZoom" value="3"/>
    </fieldset>


   <?php echo $this->element("Admin.btn_submit"); ?>
</div>

        
        