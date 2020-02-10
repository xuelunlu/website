<?php

use \App\Model\User;

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login extends MY_Controller
{

    public function submit()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|alpha_numeric|md5|callback_password_check');

        if ($this->form_validation->run() == true) {

            $this->session->set_userdata('uid', $this->uid);

            $data['status'] = 1;

            echo json_encode($data);

        } else {

            $data['status'] = 0;
            $data['errors'] = validation_errors();

            echo json_encode($data);

        }

    }

    public function password_check($password)
    {

        $this->form_validation->set_message('password_check', 'Username或Password不正確！');

        $username = $this->input->post('username', true);

        $users = User::where([
            ['username', '=', $username],
            ['password', '=', $password],
            ['role', '=', 0],
        ])->get();

        if ($users->count() == 1) {

            $user = $users->get(0);

            $this->uid = $user->uid;

            return true;

        }

        return false;

    }

    public function index()
    {

        $this->load->view('manage/pages_login.php', []);

    }

}
