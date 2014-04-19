<?php
	define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST')); // 127.0.250.1
	define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT')); // 3306
	define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME')); // admin
	define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD')); // 
	define('DB_NAME', getenv('OPENSHIFT_APP_NAME')); // myapp
	define('DB_SOCKET', getenv('OPENSHIFT_MYSQL_DB_SOCKET')); // $OPENSHIFT_MYSQL_DIR/socket/mysql.sock
	define('DB_STRING', getenv('OPENSHIFT_MYSQL_DB_URL')); //
?>