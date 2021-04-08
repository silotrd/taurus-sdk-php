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

class TaurusDataListVo {
    private $hasNext;
    private $list;

    public function __construct($hasNext, $list) {
        $this->hasNext = $hasNext;
        $this->list    = $list;
    }

    /**
     * @return mixed
     */
    public function getHasNext() {
        return $this->hasNext;
    }

    /**
     * @return mixed
     */
    public function getList() {
        return $this->list;
    }

    /**
     * @param mixed $hasNext
     */
    public function setHasNext($hasNext) {
        $this->hasNext = $hasNext;
    }

    /**
     * @param mixed $list
     */
    public function setList($list) {
        $this->list = $list;
    }
}