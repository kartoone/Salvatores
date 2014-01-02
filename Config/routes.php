<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * PHP 5
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
	Router::connect('/', array('controller' => 'menu_categories', 'action' => 'home'));
        Router::connect('/mobilemenu', array('controller' => 'menu_categories', 'action' => 'm_index'));
        Router::connect('/mobile/pizzas', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 1));//
        Router::connect('/mobile/calzones', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 2));//
        Router::connect('/mobile/appetizers', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 3));//
        Router::connect('/mobile/entrees', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 4));//
        Router::connect('/mobile/salads', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 5));//
        Router::connect('/mobile/subs', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 6));//
        Router::connect('/mobile/childrens', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 7));//
        Router::connect('/mobile/desserts', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 8));//
        Router::connect('/mobile/cheesepizzas', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 9));//
        Router::connect('/mobile/newyorkstyle', array('controller' => 'menu_categories', 'action' => 'mobile_menu', 12));//
	Router::connect('/menu', array('controller' => 'menu_categories', 'action' => 'index')); 
	Router::connect('/pizzas', array('controller' => 'menu_categories', 'action' => 'menu', 1)); // 1 is the MenuCategory.id for the pizzas category
	Router::connect('/calzones', array('controller' => 'menu_categories', 'action' => 'menu', 2)); // 2 is the MenuCategory.id for the calzones category
	Router::connect('/appetizers', array('controller' => 'menu_categories', 'action' => 'menu', 3)); // 2 is the MenuCategory.id for the calzones category
	Router::connect('/entrees', array('controller' => 'menu_categories', 'action' => 'menu', 4)); // 2 is the MenuCategory.id for the calzones category
	Router::connect('/salads', array('controller' => 'menu_categories', 'action' => 'menu', 5)); // 2 is the MenuCategory.id for the calzones category
	Router::connect('/subs', array('controller' => 'menu_categories', 'action' => 'menu', 6)); // 2 is the MenuCategory.id for the calzones category
	Router::connect('/childrens', array('controller' => 'menu_categories', 'action' => 'menu', 7)); // 2 is the MenuCategory.id for the calzones category
	Router::connect('/desserts', array('controller' => 'menu_categories', 'action' => 'menu', 8)); // 2 is the MenuCategory.id for the calzones category
	Router::connect('/cheesepizzas', array('controller' => 'menu_categories', 'action' => 'menu', 9)); // 2 is the MenuCategory.id for the calzones category
	Router::connect('/newyorkstyle', array('controller' => 'menu_categories', 'action' => 'menu', 12)); // 2 is the MenuCategory.id for the calzones category
        Router::connect('/about', array('controller' => 'pages', 'action' => 'display', 'about_us'));
        Router::connect('/contactUs', array('controller' => 'pages', 'action' => 'display', 'contact_us'));
        Router::connect('/reviews', array('controller' => 'pages', 'action' => 'display', 'reviews'));
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
