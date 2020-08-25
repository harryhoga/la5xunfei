<?php

return [
    'tts' => [
        'api_key' =>  env('XUNFEI_API_KEY', ''),
        'api_secret' => env('XUNFEI_API_SECRET', ''),
        'app_id' => env('XUNFEI_API_ID', ''),
        'business'      => [
            'aue'    => 'lame',
            'sfl' => 0, //需要配合aue=lame使用，开启流式返回 mp3格式音频取值：1 开启
            'auf'    => 'audio/L16;rate=16000',
            'vcn'    => 'xiaoyan',
            'speed'  => 40, //语速，可选值：[0-100]，默认为50
            'volume' => 100, //音量，可选值：[0-100]，默认为50
            'pitch'  => 50, //音高，可选值：[0-100]，默认为50
            'bgs' => 0, //合成音频的背景音0:无背景音（默认值）1:有背景音
            'tte'    => 'utf8',
            'reg'    => '2', //设置英文发音方式：
            // 0：自动判断处理，如果不确定将按照英文词语拼写处理（缺省）
            // 1：所有英文按字母发音
            // 2：自动判断处理，如果不确定将按照字母朗读
            // 默认按英文单词发音
            'ram'    => '0',
            'rdn'    => '0', //合成音频数字发音方式
            // 0：自动判断（默认值）
            // 1：完全数值
            // 2：完全字符串
            // 3：字符串优先
        ],
        'file_save_dir' => public_path('upld') . '/audio/',
        // 指令提示
        // -y 表示无需询问,直接覆盖输出文件;
        // -f s16le 用于设置文件格式为 s16le ;
        // -ar 16k 用于设置音频采样频率为 16k;
        // -ac 1 用于设置通道数为 1;
        // -i input.raw 用于设置输入文件为 input.pcm; output.wav 为输出文件.
        // 根据环境返回 ffmpeg路径
        'ffmpeg_config' => [
            'window_path' => 'D:\ffmpeg\ffmpeg.exe',  // windows 路径
            'linux_path'  => '/local/bin/ffmpeg', // linux 路径
            'instruct'    => ' -y -f s16le -ar 16k -ac 1 -i ',  // 操作指令
        ]
    ],
    'OCR' => []
];
