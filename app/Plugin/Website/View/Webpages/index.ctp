<?php #pr($recents);                ?>
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
                            <li><span class="fa fa-arrows-alt"></span><?php echo $banner['Detail']['area']; ?> Sq Ft</li>
                            <li><span class="fa fa-male"></span><?php echo $banner['Detail']['bathrooms']; ?>  Bathrooms</li>
                            <li><span class="fa fa-inbox"></span><?php echo $banner['Detail']['bedrooms']; ?> Bedrooms</li>
                            <li><span class="fa fa-truck"></span><?php echo $banner['Detail']['garages']; ?> Garages</li>
                        </ul>
                        <div class="slider-buttons-wrapper">
                            <a href="<?php echo $this->base ?>/details/<?php echo $banner['Property']['url']; ?>" class="yellow-btn">$<?php echo $banner['Detail']['price']; ?></a>
                            <a href="<?php echo $this->base ?>/details/<?php echo $banner['Property']['url']; ?>" class="gray-btn"><span class="fa fa-file-text-o"></span>Details</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>

<div class="search-section">
    <div class="container">
        <form action="http://sweethome.marstheme.com/property/" method="get" name="property-search" id="property-search">			

            <div class="select-wrapper select-small" id="select-ptype">
                <p>Property type</p>
                <select name='var_ptype' id='var_ptype' class='elselect' >
                    <option value='0'>Any</option>
                    <option class="level-0" value="20">House</option>
                    <option class="level-0" value="21">Building</option>
                </select>

            </div>

            <div class="select-wrapper select-small" id="select-location">
                <p>Locations</p>
                <select name='var_location' id='var_location' class='elselect' >
                    <option value='0'>Any</option>
                    <option class="level-0" value="14">Alabama</option>
                    <option class="level-0" value="43">Alaska</option>
                    <option class="level-0" value="44">American Samoa</option>
                    <option class="level-0" value="45">Arizona</option>
                    <option class="level-0" value="46">Arkansas</option>
                </select>

            </div>

            <div class="select-wrapper select-small" id="select-status">
                <p>Status</p>
                <select name='var_status' id='var_status' class='elselect' >
                    <option value='0'>Any</option>
                    <option class="level-0" value="22">For Sale</option>
                    <option class="level-0" value="23">For Rent</option>
                </select>

            </div>

            <div class="select-wrapper select-small" id="select-sq_ft">
                <p>Sq ft</p>
                <select class="elselect" id="sq_ft" name="sq_ft"><option value="any">Any</option><option  value="100">100</option><option  value="200">200</option><option  value="300">300</option><option  value="400">400</option><option  value="500">500</option><option  value="600">600</option><option  value="700">700</option><option  value="800">800</option><option  value="900">900</option><option  value="1000">1000</option></select>
            </div>

            <div class="select-wrapper select-small" id="select-bathrooms">
                <p>Bathrooms</p>
                <select class="elselect" id="bathrooms" name="bathrooms"><option value="any">Any</option><option  value="1">1</option><option  value="2">2</option><option  value="3">3</option><option  value="4">4</option><option  value="5">5</option><option  value="6">6</option><option  value="7">7</option><option  value="8">8</option><option  value="9">9</option><option  value="10">10</option></select>
            </div>

            <div class="select-wrapper select-small" id="select-bedrooms">
                <p>Bedrooms</p>
                <select class="elselect" id="bedrooms" name="bedrooms"><option value="any">Any</option><option  value="1">1</option><option  value="2">2</option><option  value="3">3</option><option  value="4">4</option><option  value="5">5</option><option  value="6">6</option><option  value="7">7</option><option  value="8">8</option><option  value="9">9</option><option  value="10">10</option></select>
            </div>

            <div class="select-wrapper select-small" id="select-garages">
                <p>Garages</p>
                <select class="elselect" id="garages" name="garages"><option value="any">Any</option><option  value="1">1</option><option  value="2">2</option><option  value="3">3</option><option  value="4">4</option><option  value="5">5</option><option  value="6">6</option><option  value="7">7</option><option  value="8">8</option><option  value="9">9</option><option  value="10">10</option></select>
            </div>

            <div class="select-wrapper select-small" id="select-minprice">
                <p>Min Price</p>
                <select class="elselect" id="minprice" name="minprice"><option value="any">Any</option><option  value="10000">$10,000</option><option  value="20000">$20,000</option><option  value="30000">$30,000</option><option  value="40000">$40,000</option><option  value="50000">$50,000</option><option  value="60000">$60,000</option><option  value="70000">$70,000</option><option  value="80000">$80,000</option><option  value="90000">$90,000</option><option  value="100000">$100,000</option></select>
            </div>

            <div class="select-wrapper select-small" id="select-maxprice">
                <p>Max Price</p>
                <select class="elselect" id="maxprice" name="maxprice"><option value="any">Any</option><option  value="10000">$10,000</option><option  value="20000">$20,000</option><option  value="30000">$30,000</option><option  value="40000">$40,000</option><option  value="50000">$50,000</option><option  value="60000">$60,000</option><option  value="70000">$70,000</option><option  value="80000">$80,000</option><option  value="90000">$90,000</option><option  value="100000">$100,000</option></select>
            </div>
            <input type="submit" value="Search" class="yellow-btn"><input type="hidden" id="propertys" name="propertys" value="d08928c0ee" />
        </form>
    </div>
</div>

<div id="pl-74">
    <div class="panel-grid" id="pg-74-0" ><div class="panel-grid-cell" id="pgc-74-0-0" >			
            <div style="margin-bottom:0px;" class="recent-listings recent-listings-6039">
                <div class="container">
                    <div class="title-box">
                        <h3>Recent Listings</h3>
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
                </div>
            </div>
            <div  class="recent-listings recent-listings-4055">
                <div class="container">
                    <div class="title-box">
                        <h3>Featured Listings</h3>
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
                                        <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>" class="featured"><i class="fa fa-star"></i>featured</a>
                                    </div>			
                                    <div class="desc-box">
                                        <h4><a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>"><?php echo $featured['Property']['name'] ?></a></h4>
                                        <ul class="slide-item-features item-features">
                                            <li><span class="fa fa-arrows-alt"></span><?php echo $featured['Detail']['area']; ?> Sq Ft</li>
                                            <li><span class="fa fa-male"></span><?php echo $featured['Detail']['bathrooms']; ?>  Bathrooms</li>
                                            <li><span class="fa fa-inbox"></span><?php echo $featured['Detail']['bedrooms']; ?> Bedrooms</li>
                                        </ul>
                                        <div class="buttons-wrapper">
                                            <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>" class="yellow-btn">$<?php echo $featured['Detail']['price']; ?></a>
                                            <a href="<?php echo $this->base ?>/details/<?php echo $featured['Property']['url']; ?>" class="gray-btn">
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
                </div>
            </div>
            <div class="agents-section">


                <div class="container">
                    <div class="title-box">
                        <h3>Our agents</h3>
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
                                    <p class="person-number">
                                        <i class="fa fa-phone"></i> <?php echo $agent['Agent']['phone']; ?>		</p>
                                    <p class="person-email">
                                        <i class="fa fa-envelope"></i> <?php echo $agent['Agent']['email']; ?>		</p>
                                    <p class="person-fax">
                                        <i class="fa fa-print"></i> <?php echo $agent['Agent']['fax']; ?>		</p>
                                    <a href="<?php echo $this->base ?>/agent_details/<?php echo $agent['Agent']['url']; ?>" class='gray-btn'>View full profile</a>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>										
                </div>
            </div>	

        </div>
    </div>
</div>