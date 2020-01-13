<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Welcome extends CI_Controller
{

    public function index()
    {

        $this->layout['content'] = $this->load->view('welcome', [], true);

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

}
