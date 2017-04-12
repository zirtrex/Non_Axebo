<?php
return array(
		'mail' => array(
				'transport' => array(
						'options' => array(
								//'host' => 'localhost',
								'name'  => 'smtp.gmail.com',
								'host' => 'smtp.gmail.com',
								'port' => '587', //25
								'connection_class'  => 'login', //plain
								'connection_config' => array(
										'username' => 'zirtrex@gmail.com', //postmaster@localhost
										'password' => '',
										//'ssl' => 'tls'
								),
						),
				),
		),
);
