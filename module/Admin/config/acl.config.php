<?php
return array(
		'acl' => array(
				'roles' => array(
						'invitado'   	=> null,
						'docente'  		=> null,
						'administrador'	=> null
				),
				'resources' => array(
						'allow' => array(		
								'Users\Controller\Auth' => array(
										'index' 					=> 'invitado',
										'salir'  					=> array('docente','administrador')
								),

								'Users\Controller\Perfil' => array(
										'index' 					=> array('docente','administrador'),
										'editar-perfil'  			=> array('docente','administrador'),
										'cambiar-clave'				=> array('docente','administrador'),
										'subir-imagen'				=> array('docente','administrador'),
								),

								'Users\Controller\ReestablecerClave' => array(
										'index' 					=> 'invitado',
										'confirmar-cambio-clave'  	=> 'invitado',
								),	
								//agregado para ver pdf
								'Users\Controller\Pdf' => array(
										'index' 					=> array('docente','administrador'),
										'pdf'  						=> array('docente','administrador'),
								),

								'Admin\Controller\Index' => array(
										'index'   					=> array('administrador'),
								),
		
								'Admin\Controller\CargaMasiva' => array(
										'index'   					=> 'administrador',
										'previsualizar'				=> 'administrador',
										'guardar'					=> 'administrador',
								),
								
								'Admin\Controller\AreaConocimiento' => array(
										'index'   					=> 'administrador',
										'agregar-area-conocimiento'	=> 'administrador',
										'editar-area-conocimiento'	=> 'administrador',
										'eliminar-area-conocimiento'=> 'administrador'
								),
		
								'Admin\Controller\CarreraProfesional' => array(
										'index'   						=> 'administrador',
										'agregar-carrera-profesional'	=> 'administrador',
										'editar-carrera-profesional'	=> 'administrador',
										'eliminar-carrera-profesional'	=> 'administrador'
								),
		
								'Admin\Controller\Estudiante' => array(
										'index'   					=> 'administrador',
										'agregar-estudiante'		=> 'administrador',
										'editar-estudiante'			=> 'administrador',
										'eliminar-estudiante'		=> 'administrador',
								),
		
								'Admin\Controller\Docente' => array(
										'index'   					=> 'administrador',
										'agregar-docente'			=> 'administrador',
										'editar-docente'			=> 'administrador',
										'eliminar-docente'			=> 'administrador',
										'asignar-usuario'           => 'administrador',
								),
		
								'Admin\Controller\CicloAcademico' => array(
										'index'   					=> 'administrador',
										'agregar-ciclo'				=> 'administrador',
										'editar-ciclo'				=> 'administrador',
										'eliminar-ciclo'			=> 'administrador',
								),
		
								'Admin\Controller\PlanEstudio' => array(
										'index'   					=> 'administrador',
										'agregar-plan'				=> 'administrador',
										'editar-plan'				=> 'administrador',
										'eliminar-plan'			=> 'administrador',
								),
		
								'Admin\Controller\Curso' => array(
										'index'   					=> 'administrador',
										'agregar-curso'				=> 'administrador',
										'editar-curso'				=> 'administrador',
										'eliminar-curso'			=> 'administrador',
								),
		
								'Admin\Controller\Silabo' => array(
										'index'   					=> 'administrador',
										'agregar-tema'				=> 'administrador',
										'eliminar-tema'				=> 'administrador'
								),
		
								'Admin\Controller\CursoAperturado' => array(
										'index'   					=> 'administrador',
										'agregar-curso-aperturado'	=> 'administrador',
										'aperturar-curso'			=> 'administrador',
										'editar-curso-aperturado'	=> 'administrador',
										'eliminar-curso-aperturado'	=> 'administrador',
								),
		
								'Admin\Controller\Aula' => array(
										'index'            => 'administrador',
										'agregar-aula'     => 'administrador',
										'guardar-aula'     => 'administrador',
										'editar-aula'      => 'administrador',
										'eliminar-aula'    => 'administrador',
								),
		
								'Admin\Controller\CargaAcademica' => array(
										'index'                       	=> 'administrador',
										'agregar-carga-academica'     	=> 'administrador',
										'editar-carga-academica'      	=> 'administrador',
										'eliminar-carga-academica'    	=> 'administrador',
										'eliminar-carga-academica'    	=> 'administrador',
										'areas-conocimiento-ajax'		=> 'administrador',
										'carreras-profesionales-ajax'	=> 'administrador',
								),
		
								'Admin\Controller\Administrador' => array(
										'index'                     => 'administrador',
										'agregar-administrador'     => 'administrador',
										'editar-administrador'      => 'administrador',
										'eliminar-administrador'    => 'administrador',
										'asignar-usuario'           => 'administrador',
								),

								'Admin\Controller\Usuario' => array(
										'index'                    => 'administrador',
										'agregar-usuario'  		   => 'administrador',
										'editar-usuario'    	   => 'administrador',
										'eliminar-usuario'  	   => 'administrador'
								),
									
								'Admin\Controller\Matricula' => array(
										'index'   					=> 'administrador',
										'matricular-estudiante'		=> 'administrador',
										'eliminar-estudiante'		=> 'administrador'
								),						
								
								'Axebo\Controller\Index' => array(
										'index'   				=> array('invitado'),
										'iniciar-sesion'   		=> array('docente'),
										'listar-estudiantes'   	=> array('docente'),
										'registrar-asistencia' 	=> array('docente'),
										'avance-silabo'   		=> array('docente'),
										'registrar-avance'   	=> array('docente'),
										'cerrar-sesion'   		=> array('docente')
								),
								
								'Reporte\Controller\Index' => array(
										'primer-reporte'   		=> 'administrador',
										'primer-reporte-pdf'	=> 'administrador',	
										'segundo-reporte'   	=> 'administrador',
										'segundo-reporte-pdf'	=> 'administrador',
										'tercer-reporte'   		=> 'administrador',
										'tercer-reporte-pdf'	=> 'administrador',
										'cuarto-reporte'   		=> 'administrador',
										'cuarto-reporte-pdf'	=> 'administrador',
										'quinto-reporte'   		=> 'administrador',
										'quinto-reporte-pdf'	=> 'administrador',
										'sexto-reporte'   		=> 'docente',
										'sexto-reporte-pdf'   	=> 'docente',
										'septimo-reporte'   	=> array('docente','administrador'),
										'septimo-reporte-pdf'  	=> array('docente','administrador'),
								),
		
		
						),
		
						'deny' => array(
		
								'Users\Controller\Auth' => array(
										'index'   	=> array('docente','administrador'),
										'salir'		=> 'invitado'
								),
								
								'Users\Controller\Perfil' => array(
										'index'   			=> 'invitado',
										'editar-perfil'		=> 'invitado',
										'cambiar-clave'		=> 'invitado',
										'subir-imagen'		=> 'invitado'
								),
		
						),
				)
		)
);