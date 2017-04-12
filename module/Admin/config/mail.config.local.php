<?php
return array(
	'mail' => array(
		'transport' => array(
			'options' => array(
				'host' => 'localhost',
				//'host' => 'smtp.gmail.com',
				//'connection_class'  => 'plain',
				'port' => '25',
				'connection_config' => array(
					'username' => 'postmaster@localhost',
					'password' => '',
					#'ssl' => 'tls'
				),
			),  
		),
	),
);
