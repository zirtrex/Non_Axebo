<?php
/* Actualmente no se usa.
return array(
		
		//Navigation for breadcrumb
		'navigation' => array(
				'default' => array(
						//Navegación para el backend
						array(
								'label' => 'Admin',
								'route' => 'home',
								'pages' => array(
										array(
												'label' => 'Carga masiva',
												'route' => 'carga-masiva'
										),
										array(
												'label' => 'Carrera Profesional',
												'route' => 'carrera-profesional',
												'action' => 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'carrera-profesional',
																'action' 	=> 'agregar-carrera',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'carrera-profesional',
																'action' 	=> 'editar-carrera',
														),
												),
										),
										array(
												'label' 	=> 'Ciclo académico',
												'route' 	=> 'ciclo-academico',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'ciclo-academico',
																'action' 	=> 'agregar-ciclo',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'ciclo-academico',
																'action' 	=> 'editar-ciclo',
														),
												),
										),
										array(
												'label' 	=> 'Plan de Estudios',
												'route' 	=> 'plan-estudio',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'plan-estudio',
																'action' 	=> 'agregar-plan',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'plan-estudio',
																'action' 	=> 'editar-plan',
														),
												),
										),
										array(
												'label' 	=> 'Aulas',
												'route' 	=> 'aula',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'aula',
																'action' 	=> 'agregar-aula',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'aula',
																'action' 	=> 'editar-aula',
														),
												),
										),
										array(
												'label' 	=> 'Usuarios',
												'route' 	=> 'usuario',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'usuario',
																'action' 	=> 'agregar-usuario',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'usuario',
																'action' 	=> 'editar-usuario',
														),
												),
										),
										array(
												'label' 	=> 'Administradores',
												'route' 	=> 'administrador',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'administrador',
																'action' 	=> 'agregar-administrador',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'administrador',
																'action' 	=> 'editar-administrador',
														),
												),
										),
										array(
												'label' 	=> 'Docentes',
												'route' 	=> 'docente',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'docente',
																'action' 	=> 'agregar-docente',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'docente',
																'action' 	=> 'editar-docente',
														),
												),
										),
										array(
												'label' 	=> 'Estudiantes',
												'route' 	=> 'estudiante',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'estudiante',
																'action' 	=> 'agregar-estudiante',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'estudiante',
																'action' 	=> 'editar-estudiante',
														),
												),
										),
										array(
												'label' 	=> 'Cursos',
												'route' 	=> 'curso',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'curso',
																'action' 	=> 'agregar-curso',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'curso',
																'action' 	=> 'editar-curso',
														),
														array(
																'label' 	=> 'Asignar silabo',
																'route' 	=> 'silabo',
																'action' 	=> 'index',
														),
												),
										),
										array(
												'label' 	=> 'Carga Académica',
												'route' 	=> 'carga-academica',
												'action'	=> 'index',
												'pages' => array(
														array(
																'label' 	=> 'Agregar',
																'route' 	=> 'carga-academica',
																'action' 	=> 'agregar-carga-academica',
														),
														array(
																'label' 	=> 'Editar',
																'route' 	=> 'carga-academica',
																'action' 	=> 'editar-carga-academica',
														),
														array(
																'label' 	=> 'Matricular estudiantes',
																'route' 	=> 'matricula',
																'action' 	=> 'index',
														),
												),
										),
								),
						),
						//Navegación para el frontend
						array(
								'label' => 'Asistencia',
								'route' => 'cursos',
								'pages' => array(
										array(
												'label' => 'Cursos',
												'route' => 'cursos'
										),
										array(
												'label' => 'Iniciar sesión',
												'route' => 'iniciar-sesion',
												'pages' => array(
														array(
																'label' => 'Listar estudiantes',
																'route' => 'estudiantes'
														),
														array(
																'label' => 'Avance de sílabo',
																'route' => 'avance-silabo'
														),
												),
										),
								),
				
						),
						//Navegación para los Reportes
						array(
								'label' => 'Reportes',
								'route' => 'reportes',
								'pages' => array(),
						),
						
				),
		)
	
);
