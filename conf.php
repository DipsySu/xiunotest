<?php	


return array (
	'db' => array (
		'type' => 'pdo_mysql',
		'pdo_mysql' => array (
			'master' => array (
				'host' => '127.0.0.1',
				'user' => 'qiankun',
				'password' => 'password',
				'name' => 'blog',
				'tablepre' => 'my_',
				'charset' => 'utf8',
				'engine' => 'innodb',
			),
			'slaves' => array (),
		),
	),
);
?>