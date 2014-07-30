<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class CardResponse extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('object', 'exp_month', 'exp_year', 'fingerprint', 'last4', 'type', 'cvc_check', 'name', 'country');
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
        $this->copyIfExists($this->attributes, $result, 'exp_month', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'exp_year', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'fingerprint', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'last4', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'type', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'cvc_check', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'name', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'country', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
