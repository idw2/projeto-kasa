<?php #pr($recents);                       ?>
<?php if (sizeof($banners) != 0): ?>

    <div class="main-flexslider">
        <ul class="slides">
            <?php foreach ($banners as $banner): ?>

                <li class="slides" id="slide-n62">

                    <?php
                    $extensao = strtolower(pathinfo($banner['Banner']['photo_file_name'], PATHINFO_EXTENSION));
                    $_image_name = explode(".{$extensao}", $banner['Banner']['photo_file_name']);
                    ?>
                    <img width="1920" height="638" src="<?php echo $this->Html->url("/files/banners/" . $banner['Banner']['id'] . "/" . $_image_name[0] . "_big." . $extensao); ?>" alt="<?php echo $banner['Banner']['photo_file_name']; ?>" />							<div class="slide-box">
                        <h2><?php echo $banner['Property']['name'] ?></h2>
                        <p><?php echo $banner['Banner']['description'] ?></p>								
                        <ul class="slide-item-features">

                            <li><span class="fa fa-arrows-alt"></span><?php echo __($banner['Detail']['area']); ?> 
                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                    <?php echo __('Sq Ft'); ?>
                                <?php else: ?>
                                    <?php echo __('Área'); ?>
                                <?php endif; ?>
                            </li>
                            <li><span class="fa fa-male"></span><?php echo __($banner['Detail']['bathrooms']); ?>  
                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                    <?php echo __('Bathrooms'); ?>
                                <?php else: ?>
                                    <?php echo __('Banheiros'); ?>
                                <?php endif; ?>                                
                            </li>
                            <li><span class="fa fa-inbox"></span><?php echo __($banner['Detail']['bedrooms']); ?> 
                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                    <?php echo __('Bedrooms'); ?>
                                <?php else: ?>
                                    <?php echo __('Quartos'); ?>
                                <?php endif; ?>                                
                            </li>
                            <li><span class="fa fa-truck"></span><?php echo __($banner['Detail']['garages']); ?> 
                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                    <?php echo __('Garages'); ?>
                                <?php else: ?>
                                    <?php echo __('Vagas'); ?>
                                <?php endif; ?> 
                            </li>
                        </ul>
                        <div class="slider-buttons-wrapper">
                            <a href="<?php echo $this->base ?>/details/<?php echo $banner['Property']['url']; ?>" class="yellow-btn">$<?php echo $banner['Detail']['price']; ?></a>
                            <a href="<?php echo $this->base ?>/details/<?php echo $banner['Property']['url']; ?>" class="gray-btn"><span class="fa fa-file-text-o"></span><?php echo __('Details'); ?></a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>
<?php echo $this->element("Website.search"); ?>

<div id="pl-74">
    <div class="panel-grid" id="pg-74-0" ><div class="panel-grid-cell" id="pgc-74-0-0" >			
            <div style="margin-bottom:0px;" class="recent-listings recent-listings-6039">
                <div class="container">
                    <div class="title-box">
                        <?php if ($this->Session->read('Config.language') == "eng"): ?>
                            <h3><?php echo __('Recent Listings'); ?></h3>
                        <?php else: ?>
                            <h3><?php echo __('Recentes'); ?></h3>
                        <?php endif; ?>
                        <div class="bordered"></div>
                    </div>
                    <div class="row listings-items-wrapper">
                        <?php foreach ($recents as $recent): ?>

                            <div class="col-md-4 listing-single-item">
                                <div class="item-inner">
                                    <div class="image-wrapper">
                                        <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>">
                                            <?php
                                            $extensao = strtolower(pathinfo($recent['Property']['photo_file_name'], PATHINFO_EXTENSION));
                                            $_image_name = explode(".{$extensao}", $recent['Property']['photo_file_name']);
                                            ?>
                                            <img width="370" height="270" src="<?php echo $this->Html->url("/files/properties/" . $recent['Property']['id'] . "/" . $_image_name[0] . "_small." . $extensao); ?>" class="attachment-property-thumbnail-370-270 wp-post-image" alt="<?php echo $recent['Property']['photo_file_name']; ?>" />
                                        </a>

                                        <?php if ($recent['Property']['type'] == 'Apartment'): ?>
                                            <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>" class="fa fa-building-o property-type-icon"></a>
                                        <?php else: ?>
                                            <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>" class="fa fa-home property-type-icon"></a>
                                        <?php endif; ?>

                                        <?php if ($recent['Property']['featured']): ?>
                                            <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>" class="featured">
                                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                                    <i class="fa fa-star"></i><?php echo __('featured'); ?>
                                                <?php else: ?>
                                                    <i class="fa fa-star"></i><?php echo __('destaque'); ?>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>			
                                    <div class="desc-box">
                                        <h4><a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>"><?php echo $recent['Property']['name'] ?></a></h4>
                                        <ul class="slide-item-features item-features">
                                            <li><span class="fa fa-arrows-alt"></span><?php echo __($recent['Detail']['area']); ?> 
                                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                                    <?php echo __('Sq Ft'); ?>
                                                <?php else: ?>
                                                    <?php echo __('Área'); ?>
                                                <?php endif; ?>
                                            </li>
                                            <li><span class="fa fa-male"></span><?php echo __($recent['Detail']['bathrooms']); ?>  
                                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                                    <?php echo __('Bathrooms'); ?>
                                                <?php else: ?>
                                                    <?php echo __('Banheiros'); ?>
                                                <?php endif; ?>                                
                                            </li>
                                            <li><span class="fa fa-inbox"></span><?php echo __($recent['Detail']['bedrooms']); ?> 
                                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                                    <?php echo __('Bedrooms'); ?>
                                                <?php else: ?>
                                                    <?php echo __('Quartos'); ?>
                                                <?php endif; ?>                                
                                            </li>
                                        </ul>
                                        <div class="buttons-wrapper">
                                            <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>" class="yellow-btn">$<?php echo $recent['Detail']['price']; ?></a>
                                            <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>" class="gray-btn">
                                                <span class="fa fa-file-text-o"></span>
                                                <?php echo __('Details'); ?>
                                            </a>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div  class="recent-listings recent-listings-4055">
                <div class="container">
                    <div class="title-box">
                        <?php if ($this->Session->read('Config.language') == "eng"): ?>
                            <h3><?php echo __('Featured Listings'); ?></h3>
                        <?php else: ?>
                            <h3><?php echo __('Imóveis em Destaque'); ?></h3>
                        <?php endif; ?>
                        <div class="bordered"></div>
                    </div>
                    <div class="row listings-items-wrapper">



                        <?php foreach ($featureds as $featured): ?>

                            <div class="col-md-4 listing-single-item">
                                <div class="item-inner">
                                    <div class="image-wrapper">
                                        <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>">

                                            <?php
                                            $extensao = strtolower(pathinfo($featured['Property']['photo_file_name'], PATHINFO_EXTENSION));
                                            $_image_name = explode(".{$extensao}", $featured['Property']['photo_file_name']);
                                            ?>
                                            <img width="370" height="270" src="<?php echo $this->Html->url("/files/properties/" . $featured['Property']['id'] . "/" . $_image_name[0] . "_small." . $extensao); ?>" class="attachment-property-thumbnail-370-270 wp-post-image" alt="<?php echo $featured['Property']['photo_file_name']; ?>" />
                                        </a>
                                        <?php if ($recent['Property']['type'] == 'Apartment'): ?>
                                            <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>" class="fa fa-building-o property-type-icon"></a>
                                        <?php else: ?>
                                            <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>" class="fa fa-home property-type-icon"></a>
                                        <?php endif; ?>
                                        <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>" class="featured">
                                            <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                                <i class="fa fa-star"></i><?php echo __('featured'); ?>
                                            <?php else: ?>
                                                <i class="fa fa-star"></i><?php echo __('destaque'); ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>			
                                    <div class="desc-box">
                                        <h4><a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>"><?php echo $featured['Property']['name'] ?></a></h4>
                                        <ul class="slide-item-features item-features">
                                            <li><span class="fa fa-arrows-alt"></span><?php echo __($featured['Detail']['area']); ?> 
                                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                                    <?php echo __('Sq Ft'); ?>
                                                <?php else: ?>
                                                    <?php echo __('Área'); ?>
                                                <?php endif; ?>
                                            </li>
                                            <li><span class="fa fa-male"></span><?php echo __($featured['Detail']['bathrooms']); ?>  
                                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                                    <?php echo __('Bathrooms'); ?>
                                                <?php else: ?>
                                                    <?php echo __('Banheiros'); ?>
                                                <?php endif; ?>                                
                                            </li>
                                            <li><span class="fa fa-inbox"></span><?php echo __($featured['Detail']['bedrooms']); ?> 
                                                <?php if ($this->Session->read('Config.language') == "eng"): ?>
                                                    <?php echo __('Bedrooms'); ?>
                                                <?php else: ?>
                                                    <?php echo __('Quartos'); ?>
                                                <?php endif; ?>                                
                                            </li>
                                        </ul>
                                        <div class="buttons-wrapper">
                                            <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>" class="yellow-btn">$<?php echo $featured['Detail']['price']; ?></a>
                                            <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>" class="gray-btn">
                                                <span class="fa fa-file-text-o"></span>
                                                <?php echo __('Details'); ?>
                                            </a>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div class="agents-section">


                <div class="container">
                    <div class="title-box">
                        <?php if ($this->Session->read('Config.language') == "eng"): ?>
                            <h3><?php echo __('Our agents'); ?></h3>
                        <?php else: ?>
                            <h3><?php echo __('Nossos Agentes'); ?></h3>
                        <?php endif; ?>
                        <div class="bordered"></div>
                    </div>
                    <div class="owl-carousel agents-slider">



                        <?php foreach ($agents as $agent): ?>

                            <div class="single-agent col-xs-12 post-56 agent type-agent status-publish has-post-thumbnail hentry">
                                <div class="image-box">

                                    <?php
                                    $extensao = strtolower(pathinfo($agent['Agent']['photo_file_name'], PATHINFO_EXTENSION));
                                    $_image_name = explode(".{$extensao}", $agent['Agent']['photo_file_name']);
                                    ?>

                                    <img width="270" height="256" src="<?php echo $this->Html->url("/files/agents/" . $agent['Agent']['id'] . "/" . $_image_name[0] . "_small." . $extensao); ?>" class="attachment-agents-thumbnail-270-256 wp-post-image" alt="<?php echo $agent['Agent']['photo_file_name']; ?>" />					
                                    <ul class="social-icons">
                                        <?php if ($agent['Agent']['google_plus'] != ""): ?>
                                            <li><a href="<?php echo $agent['Agent']['google_plus']; ?>" class="fa fa-google-plus"></a></li>
                                        <?php endif; ?>
                                        <?php if ($agent['Agent']['facebook'] != ""): ?>
                                            <li><a href="<?php echo $agent['Agent']['facebook']; ?>" class="fa fa-facebook"></a></li>
                                        <?php endif; ?>
                                        <?php if ($agent['Agent']['twitter'] != ""): ?>
                                            <li><a href="<?php echo $agent['Agent']['twitter']; ?>" class="fa fa-twitter"></a></li>
                                        <?php endif; ?>
                                        <?php if ($agent['Agent']['instagram'] != ""): ?>
                                            <li><a href="<?php echo $agent['Agent']['instagram']; ?>" class="fa fa-instagram"></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="desc-box">
                                    <h4><?php echo $agent['Agent']['name']; ?></h4>
                                    <?php if ($agent['Agent']['phone'] != ""): ?>
                                        <p class="person-number">
                                            <i class="fa fa-phone"></i> <?php echo __($agent['Agent']['phone']); ?>												
                                        </p>
                                    <?php endif; ?>
                                    <?php if ($agent['Agent']['cell_phone'] != ""): ?>
                                        <p class="person-email">
                                            <i class="fa fa-mobile"></i> <?php echo __($agent['Agent']['cell_phone']); ?>												
                                        </p>
                                    <?php endif; ?>
                                    <?php if ($agent['Agent']['email'] != ""): ?>
                                        <p class="person-email">
                                            <i class="fa fa-envelope"></i> <?php echo __($agent['Agent']['email']); ?>				
                                        </p>
                                    <?php endif; ?>
                                    <?php if ($agent['Agent']['fax'] != ""): ?>
                                        <p class="person-fax">
                                            <i class="fa fa-print"></i> <?php echo __($agent['Agent']['fax']); ?>				
                                        </p>
                                    <?php endif; ?>
                                    <a href="<?php echo $this->base ?>/agent_details/<?php echo $agent['Agent']['url']; ?>" class='gray-btn'><?php echo __("View full profile"); ?></a>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>										
                </div>
            </div>	

        </div>
    </div>
</div>