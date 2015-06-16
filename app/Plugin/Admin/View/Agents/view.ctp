<div class="col col-sm-8 col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Created'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['created']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Modified'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['modified']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Photo'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo $this->Upload->uploadImage($agent['Agent'], 'Agent.photo', array('style' => 'big'), array('class' => 'img-thumbnail')); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Name'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['name']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('E-mail'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['email']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Phone'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['phone']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Cell Phone'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['cell_phone']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Fax'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['fax']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Description'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo $agent['Agent']['description']; ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Google Plus'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['google_plus']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Facebook'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['facebook']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Twitter'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['twitter']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Instagram'); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo h($agent['Agent']['instagram']); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Status'); ?></h3>
        </div>
        <div class="panel-body">
            <?php if ($agent['Agent']['status']): ?>
                Ativo
            <?php else: ?>
                Inativo
            <?php endif; ?>
        </div>
    </div>
</div>
