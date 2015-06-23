<header>
    <div id="top-strip">
        <div class="container">
            <ul class="pull-left social-icons">
                <?php if ($structure['Structure']['facebook'] != ""): ?>
                    <li><a href="<?php echo __($structure['Structure']['facebook']); ?>" class="fa fa-facebook"></a></li>
                <?php endif; ?>
                <?php if ($structure['Structure']['instagram'] != ""): ?>
                    <li><a href="<?php echo __($structure['Structure']['instagram']); ?>" class="fa fa-instagram"></a></li>
                <?php endif; ?>
                <?php if ($structure['Structure']['google_plus'] != ""): ?>
                    <li><a href="<?php echo __($structure['Structure']['google_plus']); ?>" class="fa fa-google-plus"></a></li>
                <?php endif; ?>
                <?php if ($structure['Structure']['twitter'] != ""): ?>
                    <li><a href="<?php echo __($structure['Structure']['twitter']); ?>" class="fa fa-twitter"></a></li>
                <?php endif; ?>
                <?php if ($structure['Structure']['pinterest'] != ""): ?>
                    <li><a href="<?php echo __($structure['Structure']['pinterest']); ?>" class="fa fa-pinterest"></a></li>
                <?php endif; ?>
                <?php if ($structure['Structure']['dribbble'] != ""): ?>
                    <li><a href="<?php echo __($structure['Structure']['dribbble']); ?>" class="fa fa-dribbble"></a></li>
                <?php endif; ?>
                <?php if ($structure['Structure']['linkedin'] != ""): ?>
                    <li><a href="<?php echo __($structure['Structure']['linkedin']); ?>" class="fa fa-linkedin"></a></li>				
                <?php endif; ?>			
            </ul>
            <div id="contact-box" class='pull-right'>
                <a href="mailto:<?php echo __($structure['Structure']['email']); ?>" class='fa fa-envelope'><span><?php echo __($structure['Structure']['email']); ?></span></a>
                <a href="#" class='fa fa-phone'><span> <?php echo __($structure['Structure']['phone']); ?></span></a>
            </div>
        </div>
    </div>
</header>