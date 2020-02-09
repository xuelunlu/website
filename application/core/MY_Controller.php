<?php

use \Illuminate\Database\Capsule\Manager as Capsule;

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        require_once dirname(dirname(dirname(__FILE__))) . '/vendor/autoload.php';
        require_once dirname(dirname(__FILE__)) . '/config/database.php';

        $capsule = new Capsule();

        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => $db['default']['hostname'],
            'port'      => $db['default']['port'],
            'username'  => $db['default']['username'],
            'password'  => $db['default']['password'],
            'database'  => $db['default']['database'],
            'charset'   => $db['default']['char_set'],
            'collation' => $db['default']['dbcollat'],
            'prefix'    => '',
            'options'   => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            ),
        ], 'website');

        $capsule->setAsGlobal();
        $capsule->bootEloquent();

    }

}
