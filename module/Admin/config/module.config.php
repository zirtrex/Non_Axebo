<?php
return array (
		'router' => array (
				'routes' => array (
						// Route principal para cargar la raíz de la aplicación.
						'admin' => array (
								'type' => 'Zend\Mvc\Router\Http\Literal',
								'options' => array (
										'route' => '/no-admin/',
										'defaults' => array (
												'controller' => 'Admin\Controller\Index',
												'action' => 'index' 
										) 
								) 
						),
					
						'administrador' => array (
								'type' => 'Zend\Mvc\Router\Http\Segment',
								'options' => array (
										'route' => '/no-admin/administrador[/][:action][/codadministrador/:codadministrador][/orderby/:orderby][/:order]',
										'constraints' => array (
												'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
												'codadministrador' => '[0-9]+',
												'orderby' => '[a-zA-Z][a-zA-Z0-9_-]*',
												'order' => 'ASC|DESC'  
										),
										'defaults' => array (
												'controller' => 'Admin\Controller\Index',
												'action' => 'index' 
										) 
								) 
						),
						
				)
				 
		),
		
		'service_manager' => array (
				'abstract_factories' => array (
						'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
						'Zend\Log\LoggerAbstractServiceFactory' 
				),
				
				'aliases' => array (
						// Permite usar $this->identity() en los controladores
						'Zend\Authentication\AuthenticationService' => 'AuthService' 
				),
				
				'factories' => array (
						'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
						
						'acl' => function ($sm) {
							$config = include __DIR__ . '/acl.config.php';
							return new \Admin\Acl\Acl ( $config );
						} 
				) 
		),
		
		'module_config' => array (
				'upload_location' => __DIR__ . '/../../../public/uploads',
				'perfil_location' => __DIR__ . '/../../../public/img/perfil'
		),
		
		'translator' => array (
				'locale' => 'en_US',
				'translation_file_patterns' => array (
						array (
								'type' => 'gettext',
								'base_dir' => __DIR__ . '/../language',
								'pattern' => '%s.mo' 
						) 
				) 
		),
		
		'controllers' => array (
				'invokables' => array (
						'Admin\Controller\Index' => 'Admin\Controller\IndexController',
				) 
		),
		
		'view_manager' => array (
				'display_not_found_reason' => true,
				'display_exceptions' => true,
				'doctype' => 'HTML5',
				'not_found_template' => 'error/404',
				'exception_template' => 'error/index',
				'template_map' => array (
						'layout/layout'         => __DIR__ . '/../view/layout/layout_front.phtml',
						'layout/admin' 			=> __DIR__ . '/../view/layout/layout_principal.phtml',
						'layout/users' 			=> __DIR__ . '/../view/layout/layout_users.phtml',
						'layout/login' 			=> __DIR__ . '/../view/layout/layout_login.phtml',
						'layout/front' 	        => __DIR__ . '/../view/layout/layout_front.phtml',
						'error/404' 			=> __DIR__ . '/../view/error/404.phtml',
						'error/index' 			=> __DIR__ . '/../view/error/index.phtml',
						'paginator' 			=> __DIR__ . '/../view/partial/paginator.phtml' 
				),
				'template_path_stack' => array (
						'admin' => __DIR__ . '/../view' 
				) 
		),
		
		'module_layouts' => array(
				'Admin' 		=> 'layout/admin',
				'Axebo'         => 'layout/front',
				'Users' 		=> 'layout/users',
		),
		
		// Placeholder for console routes
		'console' => array (
				'router' => array (
						'routes' => array () 
				) 
		),
		
		// Navigation for breadcrumb
		'navigation' => array (
				'default' => array (
						// Navegación para el backend
						array (
								'label' => 'Admin',
								'route' => 'home',
								'pages' => array (
										array (
												'label' => 'Carga masiva',
												'route' => 'administrador' 
										),
										array (
												'label' => 'Area Conocimiento',
												'route' => 'administrador',
												'action' => 'index',
												'pages' => array (
														array (
																'label' => 'Agregar',
																'route' => 'administrador',
																'action' => 'index'
														),
														array (
																'label' => 'Editar',
																'route' => 'administrador',
																'action' => 'index'
														)
												)
										), 
								) 
						),
						// Navegación para el frontend
						array (
								'label' => 'Asistencia',
								'route' => 'cursos',
								'pages' => array (
										array (
												'label' => 'Cursos',
												'route' => 'cursos' 
										),
										array (
												'label' => 'Iniciar sesión',
												'route' => 'iniciar-sesion',
												'pages' => array (
														array (
																'label' => 'Listar estudiantes',
																'route' => 'estudiantes' 
														),
														array (
																'label' => 'Avance de sílabo',
																'route' => 'avance-silabo' 
														),
												),
										),
								) ,
						),
						//Navegación para los Reportes
						array(
								'label' => 'Reportes',
								'route' => 'reportes',
								'pages' => array(),
						),
				) 
		) 
);
