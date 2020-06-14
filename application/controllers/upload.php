<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Upload extends MY_Controller
{

    public function index()
    {

        echo json_encode($_FILES);

    }

}
