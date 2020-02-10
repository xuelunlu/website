<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Config extends CI_Controller
{
    public function index()
    {

        header("Content-Type: application/javascript");

        if (base_url() == site_url()) {

            $site_url = site_url();

        } else {

            $site_url = site_url() . '/';

        }

        echo "// JavaScript Document";

        echo "\n";
        echo "\n";

        echo "var site_url = '{$site_url}';";

    }

}
