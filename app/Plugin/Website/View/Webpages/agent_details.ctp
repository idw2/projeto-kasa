<div class="page-title-section" style="background:url(<?php echo $this->base ?>/website/website/wp-content/uploads/2014/06/blog-header-bg.png)">
    <div class="container">
        <div class="pull-left page-title">
            <h2><?php echo $agent['Agent']['name']; ?></h2>
        </div>
        
        <?php echo $this->element("Website.breadcrumb"); ?>
        
    </div>
</div>

<?php echo $this->element("Website.search"); ?>

<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <div class="single-agent col-xs-12 post-55 agent type-agent status-publish has-post-thumbnail hentry agent-post">
                    <div class="image-box">

                        <?php
                        $extensao = strtolower(pathinfo($agent['Agent']['photo_file_name'], PATHINFO_EXTENSION));
                        $_image_name = explode(".{$extensao}", $agent['Agent']['photo_file_name']);
                        ?>
                        <img width="270" height="256" src="<?php echo $this->Html->url("/files/agents/" . $agent['Agent']['id'] . "/" . $_image_name[0] . "_small." . $extensao); ?>" class="attachment-agents-thumbnail-270-256 wp-post-image" alt="<?php echo $agent['Agent']['photo_file_name']; ?>">					
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
                            <i class="fa fa-phone"></i> <?php echo $agent['Agent']['phone']; ?>												
                        </p>
                        <p class="person-email">
                            <i class="fa fa-mobile"></i> <?php echo $agent['Agent']['cell_phone']; ?>												
                        </p>
                        <p class="person-email">
                            <i class="fa fa-envelope"></i> <?php echo $agent['Agent']['email']; ?>				
                        </p>
                        <p class="person-fax">
                            <i class="fa fa-print"></i> <?php echo $agent['Agent']['fax']; ?>				
                        </p>
                        <!--<a href="<?php echo $this->base ?>/website/website/property/index4f30.html?ofagent=55" class="gray-btn">View all property</a>-->
                    </div>
            
                        <div class="clearfix"></div>
                    <div class="post-content">
                        <?php echo $agent['Agent']['description']; ?>
                    </div>
                </div>													
           
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 blog-sidebar">
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
            </div>		
        </div>
    </div>
</div>