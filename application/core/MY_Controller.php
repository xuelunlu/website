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
            'driver'    => $db['default']['dbdriver'],
            'host'      => $db['default']['hostname'],
            'database'  => $db['default']['database'],
            'username'  => $db['default']['username'],
            'password'  => $db['default']['password'],
            'charset'   => $db['default']['char_set'],
            'collation' => $db['default']['dbcollat'],
            'port'      => $db['default']['port'],
            'prefix'    => '',
            'options'   => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $db['default']['char_set'],
            ),
        ], 'default');

        $capsule->setAsGlobal();
        $capsule->bootEloquent();

    }

}
