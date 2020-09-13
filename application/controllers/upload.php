<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Upload extends MY_Controller
{

    public function index()
    {

        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = 0;
        $config['max_width']     = 0;
        $config['max_height']    = 0;
        $config['max_filename']  = 0;
        $config['encrypt_name']  = true;

        $this->load->library('upload', $config);

        $files = $_FILES;

        $data = [];

        for ($i = 0; $i < count($files["files"]["name"]); $i++) {

            $_FILES["files"]["name"]     = $files["files"]["name"][$i];
            $_FILES["files"]["type"]     = $files["files"]["type"][$i];
            $_FILES["files"]["tmp_name"] = $files["files"]["tmp_name"][$i];
            $_FILES["files"]["error"]    = $files["files"]["error"][$i];
            $_FILES["files"]["size"]     = $files["files"]["size"][$i];

            if (!$this->upload->do_upload("files")) {

                $data[] = [
                    'success' => 0,
                    'error'   => $this->upload->display_errors(),
                ];

            } else {

                $data[] = [
                    'success' => 1,
                    'info'    => $this->upload->data(),
                ];

            }

        }

        echo $this->load->view('uploads', ['data' => $data], true);

    }

}
