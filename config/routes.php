<?php
/**
 * Routes configuration
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/posts', function($routes)
{
    $routes->connect('/',
        ['controller' => 'Posts']
        );

    $routes->connect('/create',
        ['controller' => 'Posts', 'action' => 'create']
        );

    $routes->connect('/:id',
        ['controller' => 'Posts', 'action' => 'view'],
        ['id' => '\d+', 'pass' => ['id']]
        );
    $routes->connect('edit/:id',
        ['controller' => 'Posts', 'action' => 'edit'],
        ['id' => '\d+', 'pass' => ['id']]
        );

    $routes->connect('/hello',
        ['controller' => 'Posts', 'action' => 'hello']
        );
});

Router::prefix('admin', function($routes)
{
    $routes->connect('/', ['controller' => 'Dashboard']);
    $routes->connect('/create', ['controller' => 'Posts', 'action' => 'create']);
});

Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('/', ['controller' => 'Posts', 'action' => 'index', 'home']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks('DashedRoute');
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
