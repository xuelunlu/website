<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login extends MY_Controller
{

    public function submit()
    {

    }

    public function index()
    {

        $this->load->view('manage/pages_login.php', []);

    }

}
