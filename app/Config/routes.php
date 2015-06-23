<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'webpages', 'action' => 'index', 'plugin' => 'website'));
	Router::connect('/listings', array('controller' => 'webpages', 'action' => 'listings', 'plugin' => 'website'));
	Router::connect('/contact_us', array('controller' => 'webpages', 'action' => 'contact_us', 'plugin' => 'website'));
	Router::connect('/newsletter', array('controller' => 'webpages', 'action' => 'newsletter', 'plugin' => 'website'));
	Router::connect('/comments', array('controller' => 'webpages', 'action' => 'comments', 'plugin' => 'website'));
	Router::connect('/details', array('controller' => 'webpages', 'action' => 'details', 'plugin' => 'website'));
	Router::connect('/details/*', array('controller' => 'webpages', 'action' => 'details', 'plugin' => 'website'));
	Router::connect('/agents', array('controller' => 'webpages', 'action' => 'agents', 'plugin' => 'website'));
	Router::connect('/agent_details', array('controller' => 'webpages', 'action' => 'agent_details', 'plugin' => 'website'));
	Router::connect('/agent_details/*', array('controller' => 'webpages', 'action' => 'agent_details', 'plugin' => 'website'));
	Router::connect('/admin', array('controller' => 'users', 'action' => 'login', 'plugin' => 'admin'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
