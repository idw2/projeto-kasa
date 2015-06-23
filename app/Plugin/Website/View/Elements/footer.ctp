<footer>
    <div class="container">
        <div id="text-2" class="col-md-4 widget_text">			
            <div class="textwidget">
                <p>
                    <a class="logo logo-kaza-white" href="<?php echo $this->base; ?>/">
                    </a>
                </p>
                <p>
                    <?php echo __($structure['Structure']['address']); ?>
                </p>

            </div>
        </div>		
        <div id="footer-contact-info-2" class="col-md-4 footer-contact-info"><h3 class="footer-title"><?php echo __("Contact Info"); ?></h3>	
            <div>
                <p class="website-email">
                    <a href="mailto:<?php echo __($structure['Structure']['email']); ?>"><i class="fa fa-envelope"></i> <?php echo __($structure['Structure']['email']); ?></a>
                </p>
            </div>
            <div>
                <p class="website-number">
                    <i class="fa fa-phone"></i>  <?php echo __($structure['Structure']['phone']); ?>			
                </p>
            </div>            
            <div>
                <p class="website-fax">
                    <i class="fa fa-print"></i> <?php echo __($structure['Structure']['fax']); ?>			
                </p>
            </div>
        </div>
        <div id="footer-newsletter-2" class="col-md-4 footer-newsletter"><h3 class="footer-title"><?php echo __("Newsletter"); ?></h3>
            <p><?php echo __("* Receive news of our site."); ?></p>
            <?php if ($this->Session->read('erro_newsletter')): ?>
                <?php echo $this->element("Admin.flash"); ?>
            <?php endif; ?>

            <form class='footer-search' method="post" action="<?php echo $this->base; ?>/newsletter">
                <input name="email" id="email-address" type="text" placeholder="<?php echo __("E-mail"); ?>">
                <input type="submit" value="<?php echo __("Submit"); ?>">
                <input type="hidden" id="subscribe" name="subscribe" value="f418d72d74" />			
            </form>
        </div>
    </div>
</footer>