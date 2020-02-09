<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login extends MY_Controller
{

    public function index()
    {

        $this->layout['content'] = ''; //$this->load->view('welcome', $data, true);

        $this->load->view('manage/pages_login.php', $this->layout);

    }

}
