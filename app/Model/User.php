<?php

namespace App\Model;

use \App\Model\Model;

class User extends Model
{

    protected $connection = "default";
    protected $table      = 'user';
    protected $primaryKey = 'uid';

}
