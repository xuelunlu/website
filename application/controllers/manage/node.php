<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Node extends MY_Controller
{

    public function create_submit()
    {

        $this->form_validation->set_rules('title', '標題', 'trim|required');

        if ($this->form_validation->run() == true) {

            $data['status'] = 1;

            echo json_encode($data);

        } else {

            $data['status'] = 0;
            $data['errors'] = validation_errors();

            echo json_encode($data);

        }

    }

    public function create()
    {

        $this->layout['topbar'] = $this->load->view('manage/node/topbar', [], true);

        $this->layout['content'] = $this->load->view('manage/node/create', [], true);

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

    public function index()
    {

        $this->layout['topbar'] = $this->load->view('manage/node/topbar', [], true);

        $this->layout['content'] = '';

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

}
