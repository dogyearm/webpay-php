<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class ChargeFeeResponse extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('object', 'transaction_type', 'transaction_fee', 'rate', 'amount', 'created');
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
        $this->copyIfExists($this->attributes, $result, 'object', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'transaction_type', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'transaction_fee', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'rate', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'amount', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'created', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
