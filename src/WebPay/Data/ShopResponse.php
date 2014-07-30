<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class ShopResponse extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('id', 'object', 'livemode', 'status', 'description', 'access_key', 'created', 'statement_descriptor', 'card_types_supported', 'details');
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
        $this->copyIfExists($this->attributes, $result, 'id', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'object', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'livemode', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'status', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'description', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'access_key', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'created', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'statement_descriptor', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'card_types_supported', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'details', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
