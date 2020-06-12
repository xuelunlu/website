<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Stock extends MY_Controller
{

    public function create()
    {

        $this->layout['topbar'] = $this->load->view('manage/stock/topbar', [], true);

        $this->layout['content'] = $this->load->view('manage/stock/create', [], true);

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

    public function index()
    {

        $this->layout['topbar'] = $this->load->view('manage/stock/topbar', [], true);

        $this->layout['content'] = '';

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

}
