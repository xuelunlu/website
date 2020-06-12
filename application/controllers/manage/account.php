<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Account extends MY_Controller
{

    public function index()
    {

        $this->layout['topbar'] = $this->load->view('manage/account/topbar', [], true);

        $this->layout['content'] = '';

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

}
