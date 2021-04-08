<?php

namespace Silot;

$ROOT_PATH = dirname(__FILE__);
require_once $ROOT_PATH . "/../config/TaurusConfig.php";
require_once $ROOT_PATH . "/../TaurusClient.php";


/**
 * *************************************************************************
 *
 * Copyright (c) 2015. All Rights Reserved
 *
 * ************************************************************************
 *
 * User: muchao
 */
class TaurusExamples {
    /**
     * @var string
     */
    private static $apiKey = "dcc99ba6-3b2f-479b-9f85-86a09ccaaacf";
    /**
     * @var string
     */
    private static $serverUrl = "http://k8s-azure.silot.tech:30331";
    /**
     * @var TaurusClient
     */
    private static $client;

    public static function init() {
        self::$client = new TaurusClient(self::$apiKey, self::$serverUrl);
    }

    public static function testCreateDisbursement() {
        if (self::$client == null) {
            self::init();
        }
        $externalId        = intlcal_get_now();
        $amount            = 10000;
        $bankCode          = "014";
        $accountHolderName = "1234567890";
        $accountNumber     = "1234567899";
        $description       = "muchao test php sdk";
        $result            = self::$client->createDisbursement($externalId, $amount, $bankCode, $accountHolderName, $accountNumber, $description);
        echo json_encode($result);
    }

    public static function testGetDisbursementById($id) {
        if (self::$client == null) {
            self::init();
        }

        $result = self::$client->getDisbursementById($id);
        echo json_encode($result);
    }

    public static function testListDisbursement() {
        if (self::$client == null) {
            self::init();
        }

        $result = self::$client->listDisbursement();
        echo json_encode($result);
    }

    public static function testCreateInvoice() {
        if (self::$client == null) {
            self::init();
        }

        $externalId         = intlcal_get_now();
        $amount             = 10000;
        $description        = "muchao test php sdk";
        $invoiceDuration    = 86400;
        $successRedirectUrl = "https://www.baidu.com";
        $result             = self::$client->createInvoice($externalId,
            $amount,
            $description,
            $invoiceDuration,
            $successRedirectUrl);
        echo json_encode($result);
    }

    public static function testGetInvoiceById($id) {
        if (self::$client == null) {
            self::init();
        }

        $result = self::$client->getInvoiceById($id);
        echo json_encode($result);
    }

    public static function testExpireInvoice($id) {
        if (self::$client == null) {
            self::init();
        }

        $result = self::$client->expire($id);
        echo json_encode($result);
    }

    public static function testListInvoice() {
        if (self::$client == null) {
            self::init();
        }

        $result = self::$client->listInvoice();
        echo json_encode($result);
    }
}


//TaurusExamples::testCreateDisbursement();
//TaurusExamples::testGetDisbursementById("1380146283530211330");
//TaurusExamples::testListDisbursement();
//TaurusExamples::testCreateInvoice();
//TaurusExamples::testGetInvoiceById("1380147536796635138");
//TaurusExamples::testExpireInvoice("1380147536796635138");
TaurusExamples::testListInvoice();