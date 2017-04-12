<?php

return array(
		'router' => array(
				'routes' => array(
						
						'ingresar' => array (
								'type' => 'Zend\Mvc\Router\Http\Segment',
								'options' => array (
										'route' => '/ingresar[/:action]',
										'constraints' => array (
												'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
										),
										'defaults' => array (
												'controller' => 'Users\Controller\Auth',
												'action' => 'index'
										)
								)
						),						
						
						'salir' => array (
								'type' => 'Zend\Mvc\Router\Http\Segment',
								'options' => array (
										'route' => '/salir[/:action]',
										'constraints' => array (
												'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
										),
										'defaults' => array (
												'controller' => 'Users\Controller\Auth',
												'action' => 'salir'
										)
								)
						),
						
						'perfil' => array (
								'type' => 'Zend\Mvc\Router\Http\Segment',
								'options' => array (
										'route' => '/perfil[/:action]',
										'constraints' => array (
												'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
										),
										'defaults' => array (
												'controller' => 'Users\Controller\Perfil',
												'action' => 'index'
										)
								)
						),

						'reestablecer-clave' => array (
								'type' => 'Zend\Mvc\Router\Http\Segment',
								'options' => array (
										'route' => '/reestablecer-clave[/:action][/rol/:rol][/token/:token]',
										'constraints' => array (
												'action' 	=> '[a-zA-Z][a-zA-Z0-9_-]*',
												'rol' 		=> '[a-zA-Z]*',
												'token'		=> '[a-zA-Z0-9_-]*',
										),
										'defaults' => array (
												'controller' => 'Users\Controller\ReestablecerClave',
												'action' => 'index'
										)
								)
						),

				),
		),

		'service_manager' => array(
				'factories' => array(
						'AuthStorage' => 'Users\Factory\Storage\AuthStorageFactory',
						'AuthService' => 'Users\Factory\Storage\AuthenticationServiceFactory',
				),
		),

		'controllers' => array(
				'factories' => array(
						'Users\Controller\Auth' => 'Users\Factory\Controller\AuthControllerServiceFactory',
				),
				
				'invokables' => array(						
						'Users\Controller\Perfil' 					=> 'Users\Controller\PerfilController',
						'Users\Controller\ReestablecerClave' 		=> 'Users\Controller\ReestablecerClaveController',
						'Users\Controller\ConfirmarCambiarPassword'	=> 'Users\Controller\ConfirmarCambiarPasswordController',
				),
		),
		
		'view_manager' => array (
				'template_path_stack' => array (
						'users' => __DIR__ . '/../view' ,
				)
		),
		
);
