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

class TaurusConfig {
    /**
     * Generate API Key in Taurus Dashboard.
     * @var string
     */
    public static $apiKey;

    /**
     * Server domain
     * Note that different environment use different URL
     * @var string
     */
    public static $serverUrl;

    public static function init($apiKey, $serverUrl) {
        self::$apiKey    = $apiKey;
        self::$serverUrl = $serverUrl;
    }
}