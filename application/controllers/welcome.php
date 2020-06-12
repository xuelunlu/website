<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Welcome extends MY_Controller
{

    public function index()
    {

        $data['categories'] = [
            [
                'name'   => '持股5檔',
                'stocks' => [
                ],
            ],
            [
                'name'   => '中國5G基地台',
                'stocks' => [
                    ['name' => '晶技', 'num' => 3042],
                    ['name' => '穩懋', 'num' => 3105],
                    ['name' => '聯亞', 'num' => 3081],
                    ['name' => '聯鈞', 'num' => 3450],
                    ['name' => '亞德客-KY', 'num' => 1590],
                    ['name' => '泰碩', 'num' => 3338],
                    ['name' => '聯茂', 'num' => 6213],
                ],
            ],
            [
                'name'   => '伺服器',
                'stocks' => [
                    ['name' => '緯穎', 'num' => 6669],
                    ['name' => '信驊', 'num' => 5274],
                    ['name' => '雙鴻', 'num' => 3324],
                    ['name' => '神達', 'num' => 3706],
                    ['name' => '台光電', 'num' => 2383],
                    ['name' => '金像電', 'num' => 2368],
                    ['name' => '定穎', 'num' => 6251],
                    ['name' => '博智', 'num' => 8155],
                    ['name' => '世芯-KY', 'num' => 3661],
                    ['name' => '嘉澤', 'num' => 3533],
                    ['name' => '凡甲', 'num' => 3526],
                    ['name' => '超眾', 'num' => 6230],
                    ['name' => '勤誠', 'num' => 8210],
                    ['name' => '廣達', 'num' => 2382],
                ],
            ],
            [
                'name'   => '汽車零組件',
                'stocks' => [
                    ['name' => '智伸科', 'num' => 4551],
                    ['name' => '東陽', 'num' => 1319],
                    ['name' => '劍麟', 'num' => 2228],
                    ['name' => '和大', 'num' => 1536],
                    ['name' => '貿聯-KY', 'num' => 3665],
                    ['name' => '同致', 'num' => 3552],
                    ['name' => '勝麗', 'num' => 6238],
                    ['name' => '江興鍛', 'num' => 4528],
                    ['name' => '皇田', 'num' => 9951],
                    ['name' => '信邦', 'num' => 3023],
                    ['name' => '為升', 'num' => 2231],
                    ['name' => '定穎', 'num' => 6251],
                ],
            ],
            [
                'name'   => 'NB',
                'stocks' => [
                    ['name' => '雙鴻', 'num' => 3324],
                    ['name' => '超眾', 'num' => 6230],
                    ['name' => '力致', 'num' => 3483],
                    ['name' => '鈺太', 'num' => 6679],
                    ['name' => '瑞昱', 'num' => 2379],
                    ['name' => '義隆', 'num' => 2458],
                    ['name' => '嘉澤', 'num' => 3533],
                    ['name' => '優群', 'num' => 3217],
                    ['name' => '凡甲', 'num' => 3526],
                    ['name' => '宏碁', 'num' => 2353],
                    ['name' => '華碩', 'num' => 2357],
                    ['name' => '微星', 'num' => 2377],
                    ['name' => '技嘉', 'num' => 2376],
                    ['name' => '定穎', 'num' => 6251],
                ],
            ],
            [
                'name'   => '非蘋手機',
                'stocks' => [
                    ['name' => '雙鴻', 'num' => 3324],
                    ['name' => '聯發科', 'num' => 2454],
                    ['name' => '聯詠', 'num' => 3034],
                    ['name' => '矽創', 'num' => 8016],
                    ['name' => '敦泰', 'num' => 3545],
                    ['name' => '神盾', 'num' => 6462],
                ],
            ],
            [
                'name'   => '非電',
                'stocks' => [
                    ['name' => '豐泰', 'num' => 9910],
                    ['name' => '寶成', 'num' => 9904],
                    ['name' => '巨大', 'num' => 9921],
                    ['name' => '美利達', 'num' => 9914],
                    ['name' => '金可-KY', 'num' => 8406],
                    ['name' => '儒鴻', 'num' => 1476],
                    ['name' => '世紀鋼', 'num' => 9958],
                    ['name' => '美食-KY', 'num' => 2723],
                    ['name' => '六角', 'num' => 2732],
                    ['name' => '瓦城', 'num' => 2729],
                    ['name' => '復盛應用', 'num' => 6670],
                    ['name' => '大田', 'num' => 8924],
                    ['name' => '力山', 'num' => 1515],
                    ['name' => '喬山', 'num' => 1736],
                    ['name' => '寶雅', 'num' => 5904],
                ],
            ],
            [
                'name'   => '蘋概股',
                'stocks' => [
                    ['name' => '台積電', 'num' => 2330],
                    ['name' => '穩懋', 'num' => 3105],
                    ['name' => '大立光', 'num' => 3008],
                    ['name' => '玉晶光', 'num' => 3406],
                    ['name' => '欣興', 'num' => 3037],
                    ['name' => '台郡', 'num' => 6269],
                    ['name' => '良維', 'num' => 6290],
                    ['name' => '可成', 'num' => 2474],
                    ['name' => '鴻海', 'num' => 2317],
                    ['name' => '華通', 'num' => 2313],
                    ['name' => '康控-KY', 'num' => 4943],
                    ['name' => '新日興', 'num' => 3376],
                ],
            ],
            [
                'name'   => '生技',
                'stocks' => [
                    ['name' => '葡萄王', 'num' => 1707],
                    ['name' => '大江', 'num' => 8436],
                    ['name' => '麗豐', 'num' => 4137],
                    ['name' => '佐登', 'num' => 4190],
                    ['name' => '邦特', 'num' => 4107],
                    ['name' => '太醫', 'num' => 4126],
                    ['name' => '盛弘', 'num' => 8403],
                    ['name' => '優盛', 'num' => 4121],
                    ['name' => '信邦', 'num' => 3023],
                    ['name' => '恆大', 'num' => 1325],
                    ['name' => '南六', 'num' => 6504],
                    ['name' => '熱映', 'num' => 3373],
                    ['name' => '泰博', 'num' => 4736],
                ],
            ],
            [
                'name'   => '被動元件',
                'stocks' => [
                    ['name' => '國巨', 'num' => 2327],
                    ['name' => '華新科', 'num' => 2492],
                    ['name' => '信昌電', 'num' => 6173],
                    ['name' => '奇力新', 'num' => 2456],
                    ['name' => '禾伸堂', 'num' => 3026],
                    ['name' => '璟德', 'num' => 3152],
                ],
            ],
            [
                'name'   => 'PA',
                'stocks' => [
                    ['name' => '穩懋', 'num' => 3105],
                    ['name' => '全新', 'num' => 2455],
                    ['name' => '宏捷科', 'num' => 8086],
                ],
            ],
            [
                'name'   => 'CCL',
                'stocks' => [
                    ['name' => '金居', 'num' => 8358],
                    ['name' => '台光電', 'num' => 2383],
                    ['name' => '聯茂', 'num' => 6213],
                    ['name' => '台燿', 'num' => 6274],
                ],
            ],
            [
                'name'   => 'abf',
                'stocks' => [
                    ['name' => '欣興', 'num' => 3037],
                    ['name' => '南電', 'num' => 8046],
                    ['name' => '景碩', 'num' => 3189],
                ],
            ],
            [
                'name'   => 'HDI',
                'stocks' => [
                    ['name' => '華通', 'num' => 2313],
                ],
            ],
            [
                'name'   => '散熱',
                'stocks' => [
                    ['name' => '雙鴻', 'num' => 3324],
                    ['name' => '泰碩', 'num' => 3338],
                    ['name' => '超眾', 'num' => 6230],
                    ['name' => '奇鋐', 'num' => 3017],
                    ['name' => '健策', 'num' => 3653],
                    ['name' => '力致', 'num' => 3483],
                    ['name' => '建準', 'num' => 2421],
                ],
            ],
            [
                'name'   => '工具機',
                'stocks' => [
                    ['name' => '亞德客-KY', 'num' => 1590],
                    ['name' => '上銀', 'num' => 2049],
                ],
            ],
            [
                'name'   => '記憶體',
                'stocks' => [
                    ['name' => '南亞科', 'num' => 2408],
                    ['name' => '華邦電', 'num' => 2344],
                    ['name' => '旺宏', 'num' => 2337],
                    ['name' => '群聯', 'num' => 8299],
                    ['name' => '威剛', 'num' => 3260],
                    ['name' => '力成', 'num' => 6239],
                    ['name' => '十銓', 'num' => 4967],
                ],
            ],
            [
                'name'   => '矽晶圓',
                'stocks' => [
                    ['name' => '中美晶', 'num' => 5483],
                    ['name' => '環球晶', 'num' => 6488],
                    ['name' => '台勝科', 'num' => 3532],
                ],
            ],
            [
                'name'   => '高速傳輸',
                'stocks' => [
                    ['name' => '譜瑞-KY', 'num' => 4966],
                    ['name' => '祥碩', 'num' => 5269],
                ],
            ],
            [
                'name'   => '網通',
                'stocks' => [
                    ['name' => '智邦', 'num' => 2345],
                    ['name' => '智易', 'num' => 3596],
                    ['name' => '中磊', 'num' => 5388],
                    ['name' => '明泰', 'num' => 3380],
                    ['name' => '正文', 'num' => 4906],
                    ['name' => '合勤控', 'num' => 3704],
                    ['name' => '瑞祺電通', 'num' => 6416],
                ],
            ],
            [
                'name'   => 'PCB',
                'stocks' => [
                    ['name' => '瀚宇博', 'num' => 5469],
                    ['name' => '台表科', 'num' => 6278],
                    ['name' => '泰鼎-KY', 'num' => 4927],
                    ['name' => '健鼎', 'num' => 3044],
                    ['name' => '嘉聯益', 'num' => 6153],
                    ['name' => '台虹', 'num' => 8039],
                    ['name' => '臻鼎-KY', 'num' => 4958],
                ],
            ],
            [
                'name'   => 'LED',
                'stocks' => [
                    ['name' => '晶電', 'num' => 2448],
                    ['name' => '惠特', 'num' => 6706],
                ],
            ],
            [
                'name'   => 'MCU',
                'stocks' => [
                    ['name' => '盛群', 'num' => 6202],
                    ['name' => '紘康', 'num' => 6457],
                    ['name' => '松翰', 'num' => 5471],
                ],
            ],
            [
                'name'   => '半導體設備',
                'stocks' => [
                    ['name' => '迅得', 'num' => 6438],
                ],
            ],
            [
                'name'   => '光通訊',
                'stocks' => [
                    ['name' => '聯鈞', 'num' => 3450],
                    ['name' => '統新', 'num' => 6426],
                    ['name' => '眾達-KY', 'num' => 4977],
                    ['name' => '華星光', 'num' => 4979],
                    ['name' => '光環', 'num' => 3234],
                ],
            ],
            [
                'name'   => 'CIS',
                'stocks' => [
                    ['name' => '同欣電', 'num' => 6271],
                ],
            ],
            [
                'name'   => '其他',
                'stocks' => [
                    ['name' => '致伸', 'num' => 4915],
                    ['name' => '宏達電', 'num' => 2498],
                ],
            ],
            /*[
            'name'   => 'IC設計',
            'stocks' => [
            ['name' => '智原', 'num' => 3035],
            ],
            ],*/
            /*
         */
        ];

        $data['themes'] = [
            'iPhone',
            '東京奧運',
            '國安基金',
        ];

        $this->layout['topbar'] = '';

        $this->layout['content'] = $this->load->view('welcome', $data, true);

        $this->layout['title'] = '股票追蹤名單';

        $this->load->view('manage/layout_sidebar-left-static.php', $this->layout);

    }

}
