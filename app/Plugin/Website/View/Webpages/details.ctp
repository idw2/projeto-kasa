<div class="page-title-section" style="background:url(<?php echo $this->base ?>/website/website/wp-content/uploads/2014/06/blog-header-bg.png)">
    <div class="container">
        <div class="pull-left page-title">
            <h2>Our agents</h2>
        </div>

        <?php echo $this->element("Website.breadcrumb"); ?>

    </div>
</div>

<?php echo $this->element("Website.search"); ?>

<div class="content-section property-details-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8 page-content">
                <div class="inner-wrapper">
                    <div class="property-images-slider">
                        <div id="details-slider" class="flexslider">

                            <a href="#" onclick="javascript: return false;" class="fa fa-building-o property-type-icon"></a>
                            <a href="#" onclick="javascript: return false;" class="yellow-btn">$20,000</a>
                            <a href="#" onclick="javascript: return false;" class="status">For Rent</a>

                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides" style="width: 1200%; -webkit-transition-duration: 0s; transition-duration: 0s; -webkit-transform: translate3d(0px, 0px, 0px); transform: translate3d(0px, 0px, 0px);">

                                    <?php $i = 0; ?>
                                    <?php foreach ($photos as $photo): ?>

                                        <li <?php
                                        if ($i == 0) {
                                            echo 'class="flex-active-slide"';
                                        }
                                        ?> style="width: 770px; float: left; display: block;">
                                            <div class="image-wrapper">

                                                <?php
                                                $extensao = strtolower(pathinfo($photo['Photo']['photo_file_name'], PATHINFO_EXTENSION));
                                                $_image_name = explode(".{$extensao}", $photo['Photo']['photo_file_name']);
                                                ?>
                                                <img src="<?php echo $this->Html->url("/files/photos/" . $photo['Photo']['id'] . "/" . $_image_name[0] . "_big." . $extensao); ?>" alt="<?php echo $photo['Photo']['photo_file_name']; ?>" alt="gallery" draggable="false">
                                            </div>
                                        </li>

                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div id="details-carousel" class="flexslider">

                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides" style="width: 1200%; -webkit-transition-duration: 0s; transition-duration: 0s; -webkit-transform: translate3d(0px, 0px, 0px); transform: translate3d(0px, 0px, 0px);">

                                    <?php $i = 0; ?>
                                    <?php foreach ($photos as $photo): ?>

                                        <?php
                                        $extensao = strtolower(pathinfo($photo['Photo']['photo_file_name'], PATHINFO_EXTENSION));
                                        $_image_name = explode(".{$extensao}", $photo['Photo']['photo_file_name']);
                                        ?>

                                        <li class="flex-active-slide" style="width: 142px; float: left; display: block;">
                                            <img alt="gallery" src="<?php echo $this->Html->url("/files/photos/" . $photo['Photo']['id'] . "/" . $_image_name[0] . "_thumb." . $extensao); ?>" draggable="false">
                                        </li>

                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                            <ul class="flex-direction-nav">
                                <li>
                                    <a class="flex-prev flex-disabled" href="#" tabindex="-1"></a>
                                </li>
                                <li>
                                    <a class="flex-next" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="property-desc">					
                        <h3><?php echo $property['Property']['name']; ?></h3>
                        <ul class="slide-item-features item-features">
                            <li><span class="fa fa-arrows-alt"></span><?php echo $property['Detail']['area']; ?> Sq Ft</li>
                            <li><span class="fa fa-male"></span><?php echo $property['Detail']['bathrooms']; ?>  Bathrooms</li>
                            <li><span class="fa fa-inbox"></span><?php echo $property['Detail']['bedrooms']; ?> Bedrooms</li>
                            <li><span class="fa fa-truck"></span><?php echo $property['Detail']['garages']; ?> Garages</li>
                        </ul>
                        <?php echo $property['Property']['description']; ?>
                        <div class="property-location">
                            <h3>Property Location</h3>

                            <input id="addressinput" type="hidden" style="width: 447px" value="<?php echo $property['Location']['address']; ?>"/>
                            <input id="Button1" type="hidden" value="Find" onclick="return Button1_onclick()" /></td>
                            <div id ="map" style="height: 253px" ></div>

                            <script language="javascript" type="text/javascript">

                                var map;
                                var geocoder;
                                function InitializeMap() {

                                    var latlng = new google.maps.LatLng(<?php echo $property['Location']['latitude']; ?>, <?php echo $property['Location']['longitude']; ?>);
                                    var myOptions =
                                            {
                                                zoom: 17,
                                                center: latlng,
                                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                disableDefaultUI: true
                                            };
                                    map = new google.maps.Map(document.getElementById("map"), myOptions);

                                    document.getElementById("Button1").click();

                                }

                                function FindLocaiton() {
                                    geocoder = new google.maps.Geocoder();
                                    InitializeMap();

                                    var address = document.getElementById("addressinput").value;
                                    geocoder.geocode({'address': address}, function (results, status) {
                                        if (status == google.maps.GeocoderStatus.OK) {
                                            map.setCenter(results[0].geometry.location);
                                            var marker = new google.maps.Marker({
                                                map: map,
                                                position: results[0].geometry.location
                                            });

                                        }
                                        else {
                                            alert("Geocode was not successful for the following reason: " + status);
                                        }
                                    });

                                }


                                function Button1_onclick() {
                                    FindLocaiton();
                                }

                                window.onload = InitializeMap;

                            </script>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4 blog-sidebar">
                <div id="swh-widget-agent-3" class="sidebar-widget author-profile"><h4 class="widget-title">Listed By</h4>			<div class="image-box">

                        <?php
                        $extensao = strtolower(pathinfo($property['Agent']['photo_file_name'], PATHINFO_EXTENSION));
                        $_image_name = explode(".{$extensao}", $property['Agent']['photo_file_name']);
                        ?>
                        <img width="280" height="266" src="<?php echo $this->Html->url("/files/agents/" . $property['Agent']['id'] . "/" . $_image_name[0] . "_small." . $extensao); ?>" class="attachment-agents-thumbnail-320-303 wp-post-image" alt="13_agent-photo5">									

                        <ul class="social-icons">
                            <?php if ($property['Agent']['google_plus'] != ""): ?>
                                <li><a href="<?php echo $property['Agent']['google_plus']; ?>" class="fa fa-google-plus"></a></li>
                            <?php endif; ?>
                            <?php if ($property['Agent']['facebook'] != ""): ?>
                                <li><a href="<?php echo $property['Agent']['facebook']; ?>" class="fa fa-facebook"></a></li>
                            <?php endif; ?>
                            <?php if ($property['Agent']['twitter'] != ""): ?>
                                <li><a href="<?php echo $property['Agent']['twitter']; ?>" class="fa fa-twitter"></a></li>
                            <?php endif; ?>
                            <?php if ($property['Agent']['instagram'] != ""): ?>
                                <li><a href="<?php echo $property['Agent']['instagram']; ?>" class="fa fa-instagram"></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="desc-box">
                        <h4><?php echo $property['Agent']['name']; ?></h4>
                        <p class="person-number">
                            <i class="fa fa-phone"></i> <?php echo $property['Agent']['phone']; ?>												
                        </p>
                        <p class="person-email">
                            <i class="fa fa-mobile"></i> <?php echo $property['Agent']['cell_phone']; ?>												
                        </p>
                        <p class="person-email">
                            <i class="fa fa-envelope"></i> <?php echo $property['Agent']['email']; ?>				
                        </p>
                        <p class="person-fax">
                            <i class="fa fa-print"></i> <?php echo $property['Agent']['fax']; ?>				
                        </p>
                        <a href="<?php echo $this->base ?>/agent_details/<?php echo $property['Agent']['url']; ?>" class="gray-btn">View full profile</a>
                    </div>		
                </div>


                <div class="contact-form-wrapper comment-form-wrapper sidebar-widget author-profile">
                    <div>
                        <h4 class="box-title">Leave a comment</h4>

                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Add your comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel Reply</a></small></h3>
                            <form action="http://sweethome.marstheme.com/wp-comments-post.php" method="post" id="commentform" class="contact-form" novalidate="">
                                <p class="comment-notes">Your email address will not be published.</p>							
                                <div class="row">
                                    <div class="col-sm-12">

                                        <input type="text" id="author" name="author" placeholder="Name">		
                                    </div>

                                    <div class="col-sm-12">
                                        <input type="text" id="email" name="email" placeholder="e-mail"></div>

                                    <div class="col-sm-12">
                                        <input type="text" id="url" name="url" placeholder="website"></div>


                                    <div class="col-sm-12">
                                        <textarea id="comment" name="comment" placeholder="Message"></textarea>
                                        <input type="submit" value="Send message">
                                    </div>				                      
                                </div>
                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="" value="Send message"> <input type="hidden" name="comment_post_ID" value="112" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="093d7beeb1"></p><p class="comment-subscription-form"><input type="checkbox" name="subscribe_comments" id="subscribe_comments" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;"> <label class="subscribe-label" id="subscribe-label" for="subscribe_comments">Notify me of follow-up comments by email.</label></p><p class="comment-subscription-form"><input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;"> <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Notify me of new posts by email.</label></p><p style="display: none;"></p>					<input type="hidden" id="ak_js" name="ak_js" value="1434482549136"></form>
                        </div><!-- #respond -->


                    </div>
                </div>



                <div id="swh-widget-property-4" class="sidebar-widget similar-listings-widget">
                    <h4 class="widget-title">Similar Listings</h4>			
                    <ul class="similar-listings">
                        <?php foreach ($listings as $list): ?>

                            <li class="tab-content-item">
                                <div class="pull-left thumb">
                                    <a href="<?php echo $this->base ?>/details/<?php echo $list['Property']['url']; ?>">

                                        <?php
                                        $extensao = strtolower(pathinfo($list['Property']['photo_file_name'], PATHINFO_EXTENSION));
                                        $_image_name = explode(".{$extensao}", $list['Property']['photo_file_name']);
                                        ?>
                                        <img width="150" height="150" src="<?php echo $this->Html->url("/files/properties/" . $list['Property']['id'] . "/" . $_image_name[0] . "_small." . $extensao); ?>" class="property-thumbnail-50-50 wp-post-image" alt="<?php echo $list['Property']['photo_file_name']; ?>">
                                        
                                    </a>
                                </div>
                                <h5>
                                    <a href="<?php echo $this->base ?>/details/<?php echo $list['Property']['url']; ?>"><?php echo $list['Property']['name']; ?></a>
                                </h5>
                                <h5>$<?php echo $list['Detail']['price']; ?></h5>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>


            </div>			</div>
    </div>
</div>
