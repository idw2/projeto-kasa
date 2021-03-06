<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');
        echo $this->Html->css('uploadfile');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
            </div>
            <div id="content">
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
                <?php #echo $this->element('navbar'); ?>
            </div>
            <div id="footer">
                <?php
                echo $this->Html->link(
                        $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
                );
                ?>
                <p>
                    <?php echo $cakeVersion; ?>
                </p>
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>

        <?php echo $this->Html->script('jQuery-2.1.3.min'); ?>
        <?php echo $this->Html->script('ckeditor_standard/ckeditor'); ?>
        <?php echo $this->Html->script('jquery.uploadfile'); ?>

        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->base; ?>/js/jquery-latitude-longitude-picker-gmaps-master/css/jquery-gmaps-latlon-picker.css"/>
        <script src="<?php echo $this->base; ?>/js/jquery-latitude-longitude-picker-gmaps-master/js/jquery-gmaps-latlon-picker.js"></script>

        <?php echo $this->Html->script('default'); ?>

    </body>
</html>
