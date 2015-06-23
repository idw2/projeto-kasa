<div class="page-title-section" style="background:url(<?php echo $this->base ?>/website/website/wp-content/uploads/2014/06/blog-header-bg.png)">
    <div class="container">
        <div class="pull-left page-title">
            <?php if ($this->Session->read('Config.language') == "eng"): ?>
                <h2>Property listing</h2>
            <?php else: ?>
                <h2>Lista de Imóveis</h2>
            <?php endif; ?>            
        </div>

        <?php echo $this->element("Website.breadcrumb"); ?>

    </div>
</div>

<?php echo $this->element("Website.search"); ?>

<div class="content-section">
    <div class="container">
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
                                <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>" class="featured"><i class="fa fa-star"></i>featured</a>
                            <?php endif; ?>
                        </div>			
                        <div class="desc-box">
                            <h4><a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>"><?php echo $recent['Property']['name'] ?></a></h4>
                            <ul class="slide-item-features item-features">
                                <li><span class="fa fa-arrows-alt"></span><?php echo $recent['Detail']['area']; ?> Sq Ft</li>
                                <li><span class="fa fa-male"></span><?php echo $recent['Detail']['bathrooms']; ?>  Bathrooms</li>
                                <li><span class="fa fa-inbox"></span><?php echo $recent['Detail']['bedrooms']; ?> Bedrooms</li>
                            </ul>
                            <div class="buttons-wrapper">
                                <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>" class="yellow-btn">$<?php echo $recent['Detail']['price']; ?></a>
                                <a href="<?php echo $this->base ?>/details/<?php echo $recent['Property']['url']; ?>" class="gray-btn">
                                    <span class="fa fa-file-text-o"></span>
                                    Details
                                </a>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <?php echo $this->element("Admin.paginator"); ?>

    </div>
</div>