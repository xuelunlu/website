<?php

namespace App\Model;

use \App\Model\Model;

class Node extends Model
{

    protected $connection = "default";
    protected $table      = 'node';
    protected $primaryKey = 'nid';

}
