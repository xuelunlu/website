<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Welcome extends CI_Controller
{

    public function index()
    {

        $data['target'] = [
            ['南寶', 4766],
            ['百和', 9938],
            ['豐泰', 9910],
            ['鈺齊-KY', 9802],
            ['寶成', 9904],

            ['儒鴻', 1476],
            ['穩懋', 3105],
            ['欣興', 3037],
            ['和大', 1536],
            ['劍麟', 2228],
            ['金可', 8406],
            ['康控', 4943],
            ['邦特', 4107],
            ['太醫', 4126],
        ];

        $data['theme'] = [
            '東京奧運',
        ];

        $this->layout['content'] = $this->load->view('welcome', $data, true);

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

}
