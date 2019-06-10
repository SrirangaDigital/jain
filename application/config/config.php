<?php

define('BASE_URL', 'http://localhost/jain/');
define('PUBLIC_URL', BASE_URL . 'public/');
define('XML_SRC_URL', BASE_URL . 'md-src/xml/');
define('FLAT_URL', BASE_URL . 'application/views/flat/');

// Physical location of resources
define('PHY_BASE_URL', '/var/www/html/jain/');
define('PHY_PUBLIC_URL', PHY_BASE_URL . 'public/');
define('PHY_XML_SRC_URL', PHY_BASE_URL . 'md-src/xml/');
define('PHY_FLAT_URL', PHY_BASE_URL . 'application/views/flat/');

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '27017');
define('DB_NAME', 'jain');
define('DB_USER', 'jainUSER');
define('DB_PASSWORD', 'jain123');

// use jain;
// db.createUser(
//    {
//      user: "jainUSER",
//      pwd: "jain123",
//      roles:
//        [
//          { role: "readWrite", db: "jain" }
//        ]
//    }
// )

?>
