<?php
/**
 * Created by PhpStorm.
 * User: xuheng
 * Date: 2019/2/22
 * Time: 上午9:18
 */
class test
{

    public function index()
    {


        $client = new AipImageClassify('15553959', '3tQZX29uGeQDkeaFUW5BEYeV', 'VQ6hSwMinB8Yt6zT4Arwm34BpT8WVXQU');
//        $client = new AipImageClassify(APP_ID, API_KEY, SECRET_KEY);

        $s_client = new AipImageSearch('15559474', 'pxU4W1PzYnpbrRE6Dy1Qesge', 'E48SIdAvaEEocPlXTEnuYhz5RIeLGTIq');
        $image = file_get_contents('https://scontent-hkg3-2.cdninstagram.com/vp/f147df4f5850e2d517a7dc212e33a966/5CACD456/t51.2885-15/e35/46065152_128705901460700_4447097688228318641_n.jpg?_nc_ht=scontent-hkg3-2.cdninstagram.com');
        // 调用通用物体识别
        $c = $client->advancedGeneral($image);
        var_dump($c);exit;
    }
}
$a = new test();
$a->index();