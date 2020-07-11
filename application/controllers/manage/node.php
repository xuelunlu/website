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

            $node = new \App\Model\Node;

            $node->title = $this->input->post('title', true);

            $node->save();

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

        $this->layout['js'] = js_link(base_url('js/manage/node/create.js'));

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

    public function index($offset = 0)
    {

        $this->load->library('pagination');

        $config['base_url']    = site_url('manage/node/index');
        $config['total_rows']  = \App\Model\Node::count();
        $config['per_page']    = 10;
        $config['uri_segment'] = 4;
        $config['num_links']   = 3;

        $this->pagination->initialize($config);

        $data['links'] = $this->pagination->create_links();

        $data['rows'] = \App\Model\Node::orderBy('nid', 'DESC')->offset($offset)->limit(10)->get();

        $this->layout['topbar'] = $this->load->view('manage/node/topbar', [], true);

        $this->layout['content'] = $this->load->view('manage/node/index', $data, true);

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

}
