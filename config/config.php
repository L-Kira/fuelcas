<?php
return array(
	'certificates'	=> array(
		'development'	=> APPPATH.'certificates/dev.pem',
		'production'	=> APPPATH.'certificates/prod.pem'
	),
	'cas_host' => array(
		'development'	=> 's-login-latam.cengage.com',
		'production'	=> 's-login-latam.cengage.com'
	),
	'cas_context' => array(
		'development'	=> '/sso',
		'production'	=> '/sso'
	),
	'cas_port' => array(
		'development'	=> 443,
		'production'	=> 444
	),
	'cas_validation' => '',
	'cas_login_url' => '',
	'cas_logout_url' => 'https://cas.domain.fr/logout?service=%s',
);
