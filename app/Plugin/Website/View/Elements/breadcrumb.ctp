<div class="pull-right breadcrumb">

    <?php
    $breadcrumb = "";
    switch ($this->action) {
        case "listings":
            $breadcrumb = __("Listings");
            break;
        case "contact_us":
            $breadcrumb = __("Contact Us");
            break;
        case "details":
            $breadcrumb = __("Details");
            break;
        case "agent_details":
            $breadcrumb = __("Agent Details");
            break;
    }
    ?>

    <a title="Home" href="<?php echo $this->base ?>/" class="home"><?php echo __("Home"); ?></a>
    <?php if ($breadcrumb != ""): ?>
        <span class="fa fa-arrow-circle-right sep"></span><a title="<?php echo $breadcrumb; ?>" href=""><?php echo $breadcrumb; ?></a>
    <?php endif; ?>
</div>