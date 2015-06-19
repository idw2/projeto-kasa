<div class="page-title-section" style="background:url(<?php echo $this->base ?>/website/website/wp-content/uploads/2014/06/blog-header-bg.png)">
    <div class="container">
        <div class="pull-left page-title">
            <h2>Our agents</h2>
        </div>
        <div class="pull-right breadcrumb">
            <!-- Breadcrumb NavXT 5.2.0 -->
            <a title="Go to SweetHome." href="<?php echo $this->base ?>/website/website/index.html" class="home">SweetHome</a><span class="fa fa-arrow-circle-right sep"></span><a title="Go to News." href="<?php echo $this->base ?>/website/website/news/index.html">News</a><span class="fa fa-arrow-circle-right sep"></span>Agents			
        </div>
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
                        <div class="additional-features">
                            <h3>Additional Features</h3>
                            <ul class="features">
                                <li class="single-feature"><a href="<?php echo $this->base ?>/website/website/property_tag/amet/index.html"><i class="fa fa-check-circle"></i>amet</a></li>
                                <li class="single-feature"><a href="<?php echo $this->base ?>/website/website/property_tag/curabitur/index.html"><i class="fa fa-check-circle"></i>Curabitur</a></li>
                                <li class="single-feature"><a href="<?php echo $this->base ?>/website/website/property_tag/egestas/index.html"><i class="fa fa-check-circle"></i>egestas</a></li>
                                <li class="single-feature"><a href="<?php echo $this->base ?>/website/website/property_tag/hendrerit/index.html"><i class="fa fa-check-circle"></i>hendrerit</a></li>
                                <li class="single-feature"><a href="<?php echo $this->base ?>/website/website/property_tag/rhoncus/index.html"><i class="fa fa-check-circle"></i>rhoncus</a></li>
                            </ul>
                        </div>
                        <div class="property-location">
                            <h3>Property Location</h3>
                            <div id="property-location-map" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 126px; top: -77px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 126px; top: 179px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 382px; top: -77px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 382px; top: 179px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -130px; top: -77px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -130px; top: 179px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 638px; top: -77px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 638px; top: 179px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 126px; top: -77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 126px; top: 179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 382px; top: -77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 382px; top: 179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -130px; top: -77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -130px; top: 179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 638px; top: -77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 638px; top: 179px;"></div></div></div></div><div style="position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;"><div style="overflow: hidden; width: 720px; height: 345px;"><img src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i30289026&amp;2i20587853&amp;2e1&amp;3u17&amp;4m2&amp;1u720&amp;2u345&amp;5m5&amp;1e0&amp;5spt-BR&amp;6sus&amp;10b1&amp;12b1&amp;token=51379" style="width: 720px; height: 345px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: 126px; top: -77px; width: 256px; height: 256px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i17!2i118317!3i80421!2m3!1e0!2sm!3i306209484!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: 382px; top: 179px; width: 256px; height: 256px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i17!2i118318!3i80422!2m3!1e0!2sm!3i306208766!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: -130px; top: 179px; width: 256px; height: 256px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i17!2i118316!3i80422!2m3!1e0!2sm!3i306209484!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: 638px; top: -77px; width: 256px; height: 256px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i17!2i118319!3i80421!2m3!1e0!2sm!3i306202282!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: 126px; top: 179px; width: 256px; height: 256px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i17!2i118317!3i80422!2m3!1e0!2sm!3i306209484!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: -130px; top: -77px; width: 256px; height: 256px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i17!2i118316!3i80421!2m3!1e0!2sm!3i306209484!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: 382px; top: -77px; width: 256px; height: 256px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i17!2i118318!3i80421!2m3!1e0!2sm!3i306208766!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: 638px; top: 179px; width: 256px; height: 256px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i17!2i118319!3i80422!2m3!1e0!2sm!3i306174203!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=-37.801047,144.969861&amp;z=17&amp;t=m&amp;hl=pt-BR&amp;gl=US&amp;mapclient=apiv3" title="Clique para ver esta área no Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 365px; bottom: 0px; width: 170px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dados do mapa</a><span style="">Dados cartográficos ©2015 Google</span></div></div></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 210px; top: 83px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Dados do mapa</div><div style="font-size: 13px;">Dados cartográficos ©2015 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dados cartográficos ©2015 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; position: absolute; -webkit-user-select: none; right: 285px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="https://www.google.com/intl/pt-BR_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Termos de Uso</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 173px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Informar erros no mapa ou nas imagens para o Google" href="https://www.google.com/maps/@-37.8010469,144.9698607,17z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar erro no mapa</a></div></div><div class="gmnoprint" draggable="false" controlwidth="32" controlheight="84" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div controlwidth="32" controlheight="40" style="cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 0px; top: 0px;"><div aria-label="Controle do Pegman no Street View" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="O Pegman está desativado" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="O Pegman está sobre o mapa" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Controle do Pegman no Street View" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Girar o mapa em 90 graus" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Aumentar o zoom" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Diminuir o zoom" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div><div class="gmnoprint" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Mostrar mapa de ruas" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 29px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Mapa</div><div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 20px; text-align: left; display: none; background-color: white; background-clip: padding-box;"><div draggable="false" title="Mostrar mapa de ruas com terreno" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terreno</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Mostrar imagens de satélite" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; border-width: 1px 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: rgba(0, 0, 0, 0.14902); border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 36px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satélite</div><div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 20px; text-align: left; display: none; background-color: white; background-clip: padding-box;"><div draggable="false" title="Aumentar o zoom para a visualização de 45 graus" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(241, 241, 241); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Mostrar imagens com nomes de rua" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Marcadores</label></div></div></div></div></div></div>
                        </div>
                        <script type="text/javascript">
                            (function ($) {
                                "use strict";
                                $(document).ready(function () {
                                    initialize(-37.8010469, 144.96986070000003, 'property-location-map');
                                })
                            })(jQuery);
                        </script>
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



                <div id="swh-widget-property-4" class="sidebar-widget similar-listings-widget"><h4 class="widget-title">Similar Listings</h4>			<ul class="similar-listings">
                        <li class="tab-content-item">
                            <div class="pull-left thumb">
                                <a href="<?php echo $this->base ?>/website/website/1141-14th-street-south-2/index.html"><img width="150" height="150" src="<?php echo $this->base ?>/website/website/wp-content/uploads/2014/06/slide-03-150x150.jpg" class="property-thumbnail-50-50 wp-post-image" alt="slide-03"></a>
                            </div>
                            <h5><a href="<?php echo $this->base ?>/website/website/1141-14th-street-south-2/index.html">1141 14Th Street South</a></h5>
                            <h5>$500,000</h5>
                        </li>
                        <li class="tab-content-item">
                            <div class="pull-left thumb">
                                <a href="<?php echo $this->base ?>/website/website/2211-summer-ridge-dr-2/index.html"><img width="150" height="150" src="<?php echo $this->base ?>/website/website/wp-content/uploads/2014/06/02_img-1-150x150.png" class="property-thumbnail-50-50 wp-post-image" alt="02_img-1"></a>
                            </div>
                            <h5><a href="<?php echo $this->base ?>/website/website/2211-summer-ridge-dr-2/index.html">2211 Summer Ridge Dr</a></h5>
                            <h5>$20,000</h5>
                        </li>
                        <li class="tab-content-item">
                            <div class="pull-left thumb">
                                <a href="<?php echo $this->base ?>/website/website/1141-14th-street-south-4/index.html"><img width="150" height="150" src="<?php echo $this->base ?>/website/website/wp-content/uploads/2014/06/03_img-2-150x150.png" class="property-thumbnail-50-50 wp-post-image" alt="03_img-2"></a>
                            </div>
                            <h5><a href="<?php echo $this->base ?>/website/website/1141-14th-street-south-4/index.html">1141 14Th Street South</a></h5>
                            <h5>$500,000</h5>
                        </li>
                    </ul>
                </div>


            </div>			</div>
    </div>
</div>
