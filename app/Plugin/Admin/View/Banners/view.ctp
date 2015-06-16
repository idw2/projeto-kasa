<div class="col col-sm-12 col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Banner'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo $this->Upload->uploadImage($banner['Banner'], 'Banner.photo', array('style' => 'medium'), array('class' => 'img-thumbnail')); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Created'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($banner['Banner']['created']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Modified'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($banner['Banner']['modified']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Photo File Name'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($banner['Banner']['photo_file_name']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Status'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($banner['Banner']['status']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Position'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($banner['Banner']['position']); ?>
        </div>
    </div>
</div>
