<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php
            echo $page;
            if (isset($desc)):
                ?> 
                <small>
                    <?php echo $desc; ?>
                </small>
            <?php endif; ?>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <?php echo $this->Html->link("<i class='{$fortawesome}'></i> {$page}", array('controller' => $this->request->params['controller'], 'action' => 'index'), array('escape' => false)); ?>
                
                
                <!--
                <i class="<?php echo $fortawesome; ?>"></i> <?php echo $page; ?>
                -->
            </li>
            <li>
                <?php echo $desc; ?>
            </li>
        </ol>
    </div>
</div>