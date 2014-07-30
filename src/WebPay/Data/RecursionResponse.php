<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class RecursionResponse extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('id', 'object', 'livemode', 'created', 'amount', 'currency', 'period', 'description', 'customer', 'shop', 'last_executed', 'next_scheduled', 'status', 'deleted');
        $params = $this->normalize($this->fields, $params);
        if (!array_key_exists('deleted', $params) || $params['deleted'] === null) {
          $params['deleted'] = false;
}
        $this->attributes = $params;
    }

    public function __set($key, $value)
    {
        throw new \Exception('This class is immutable');
    }

    public function requestBody()
    {
        $result = array();
        $this->copyIfExists($this->attributes, $result, 'id', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'object', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'livemode', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'created', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'amount', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'currency', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'period', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'description', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'customer', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'shop', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'last_executed', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'next_scheduled', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'status', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'deleted', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
