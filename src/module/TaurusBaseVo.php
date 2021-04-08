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

class TaurusBaseVo {
    private $code;
    private $msg;
    private $data;

    public function __construct($code, $msg, $data) {
        $this->code = $code;
        $this->msg  = $msg;
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getMsg() {
        return $this->msg;
    }

    /**
     * @return mixed
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code) {
        $this->code = $code;
    }

    /**
     * @param mixed $data
     */
    public function setData($data) {
        $this->data = $data;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg($msg) {
        $this->msg = $msg;
    }

}