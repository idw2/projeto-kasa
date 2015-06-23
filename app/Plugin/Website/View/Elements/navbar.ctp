<div class="slider-section">
    <div id="premium-bar">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo-kaza" href="<?php echo $this->base; ?>/">
                        </a>



                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="menu-header-menu" class="nav navbar-nav navbar-right">
                            <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-12">
                                <a href="<?php echo $this->base; ?>/"><?php echo __("Home"); ?></a>
                            </li>
                            <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14">
                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                    <a href="<?php echo $this->base ?>/listings"><?php echo __("Properties"); ?></a>
                                <?php else: ?>
                                    <a href="<?php echo $this->base ?>/listings"><?php echo __("Imóveis"); ?></a>
                                <?php endif; ?>
                            </li>
                            <!--
                            <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-108">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="agents">Agentes <b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="#">Luis Augusto Hamby</a></li>
                                                            </ul>
                                                        </li>
                            -->

                            <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                                <a href="<?php echo $this->base; ?>/contact_us">
                                    <?php echo __("Contact Us"); ?>
                                </a>
                            </li>
                            <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-108">
                                <!--                                <ul class="nav-flag clearfix">
                                                                    <li class="flag">
                                                                        <a style="color:#EE3B16;">pt</a> <span style="color:#060606; opacity:0.5">|</span> <a style="color:#060606; opacity:0.5" href="/en">en</a>
                                                                    </li>
                                                                </ul>-->


                                <!--<a href="#" class='dropdown-toggle' data-toggle='dropdown'><?php echo __('Languages'); ?></a>-->
                                <!--<ul class="dropdown-menu">-->
                                <style>
                                    .nav-flag{
                                          padding-left: 12px;
                                    }
                                    .nav-flag li{
                                        margin: 9px 0;
                                    }
                                    .nav-flag a{
                                        padding: 5px 7px !important;
                                    }
                                </style>
                                <ul class="nav-flag clearfix">
                                    <li class="flag">
                                        <!--<li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109">-->
                                        <?php if ($this->Session->read('Config.language') == "por"): ?>
                                            <?php echo $this->Html->link(__('pt'), array('language' => 'por'), array('class' => 'dropdown-toggle update-laguage', 'data-toggle' => 'dropdown', 'data-language' => 'por', 'data-base' => $this->base, 'style' => 'color:#f2be1a;')); ?>
                                        <?php else: ?>
                                            <?php echo $this->Html->link(__('pt'), array('language' => 'por'), array('class' => 'dropdown-toggle update-laguage', 'data-toggle' => 'dropdown', 'data-language' => 'por', 'data-base' => $this->base, 'style' => '')); ?>
                                        <?php endif; ?>
                                        <!--                                    </li>
                                                                            <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109">-->

                                        <span style="color:#FFF; opacity:0.5">|</span>
                                        <a>en</a>
                                        <?php #if ($this->Session->read('Config.language') == "eng"): ?>
                                            <?php #echo $this->Html->link(__("en"), array('language' => 'eng'), array('class' => 'dropdown-toggle update-laguage', 'data-toggle' => 'dropdown', 'data-language' => 'eng', 'data-base' => $this->base, 'style' => 'color:#f2be1a;')); ?>
                                        <?php #else: ?>
                                            <?php #echo $this->Html->link(__("en"), array('language' => 'eng'), array('class' => 'dropdown-toggle update-laguage', 'data-toggle' => 'dropdown', 'data-language' => 'eng', 'data-base' => $this->base, 'style' => '')); ?>
                                        <?php #endif; ?>

                                    </li>
                                </ul>
                            </li>
                        </ul>				
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>