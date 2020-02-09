<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Welcome extends MY_Controller
{

    public function index()
    {

        $data['target'] = [
            ['穩懋', 3105],
            ['麗豐', 4137],
            ['豐泰', 9910],
            ['巨大', 9921],

            ['南寶', 4766],
            ['百和', 9938],
            ['鈺齊-KY', 9802],
            ['寶成', 9904],
            ['晶華', 2707],
            ['雲品', 2748],
            ['雄獅', 2731],
            ['鳳凰', 5706],
            ['美食-KY', 2723],
            ['王品', 2727],
            ['瓦城', 2729],
            ['儒鴻', 1476],
            ['佐登', 4190],
            ['欣興', 3037],
            ['良維', 6290],
            ['和大', 1536],
            ['劍麟', 2228],
            ['金可', 8406],
            ['康控', 4943],
            ['邦特', 4107],
            ['太醫', 4126],
            ['聯詠', 3034],
            ['元翎', 4564],
        ];

        $data['theme'] = [
            '東京奧運',
            '特斯拉',
        ];

        $this->layout['content'] = $this->load->view('welcome', $data, true);

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

}
