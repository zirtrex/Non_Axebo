<?php

return array(
    'router' => array(
        'routes' => array(
        		        		
        		'home' => array(
        				'type'    => 'Zend\Mvc\Router\Http\Literal',
        				'options' => array(
        						'route'    => '/',
        						'defaults' => array(
        								'controller' => 'Axebo\Controller\Index',
        								'action'     => 'index',
        						),
        				),
        		),
        ),
    ),
    
    'service_manager' => array(

    ),    
    
    'controllers' => array(
        'invokables' => array(
            'Axebo\Controller\Index' => 'Axebo\Controller\IndexController'
        ),
    ),
    
    'view_manager' => array(
        'template_path_stack' => array(
            'axebo' => __DIR__ . '/../view',
        ),
    ),
);
