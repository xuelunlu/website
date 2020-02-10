<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Account extends MY_Controller
{

    public function index()
    {

        var_export($_SESSION);

    }

}
