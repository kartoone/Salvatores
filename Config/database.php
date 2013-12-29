<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
//		'host' => 'cslinux.samford.edu',
//		'password' => 'wsMraUC7a3Ms8Xme', // don't update this password ... this is the correct password for the cslinux db
		'host' => 'localhost', // uncomment these two lines if you want to work with your local xampp database
		'password' => 'wsMraUC7a3Ms8Xme', // update this password with your localhost db password
		'login' => 'salvatoresdb',
		'database' => 'salvatoresdb',
	);
}
