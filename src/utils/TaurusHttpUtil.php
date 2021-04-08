<?php

/**
 * *************************************************************************
 *
 * Copyright (c) 2015. All Rights Reserved
 *
 * ************************************************************************
 *
 * User: muchao
 */

namespace Silot;
require_once "../config/TaurusConfig.php";

class TaurusHttpUtil {
    private static function getAuthorization() {
        return "Basic " . base64_encode(TaurusConfig::$apiKey . ":");
    }

    public static function post($url, $params) {
        $data        = json_encode($params);
        $headerArray = ["Content-type:application/json;charset='utf-8'", "Accept:application/json", "Authorization:" . self::getAuthorization()];
        $curl        = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headerArray);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return json_decode($output, true);
    }

    public static function get($url) {
        $headerArray = ["Content-type:application/json;", "Accept:application/json", "Authorization:" . self::getAuthorization()];
        $ch          = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArray);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output, true);
        return $output;
    }
}