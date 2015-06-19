<div class="col col-sm-12 col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Created'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo $this->Lib->date_format(h($structure['Structure']['created'])); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Modified'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo $this->Lib->date_format(h($structure['Structure']['modified'])); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Facebook'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['facebook']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Google Plus'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['google_plus']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Twitter'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['twitter']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Pinterest'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['pinterest']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Dribbble'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['dribbble']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Linkedin'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['linkedin']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('E-mail'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['email']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Phone'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['phone']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Fax'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($structure['Structure']['fax']); ?>
        </div>
    </div>
</div>
