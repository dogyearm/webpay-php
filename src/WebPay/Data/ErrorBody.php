<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class ErrorBody extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('message', 'type', 'caused_by', 'code', 'param', 'charge');
        $params = $this->normalize($this->fields, $params);
        $this->attributes = $params;
    }

    public function __set($key, $value)
    {
        throw new \Exception('This class is immutable');
    }

    public function requestBody()
    {
        $result = array();
        $this->copyIfExists($this->attributes, $result, 'message', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'type', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'caused_by', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'code', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'param', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'charge', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
