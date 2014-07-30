<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class AccountResponse extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('id', 'object', 'charge_enabled', 'currencies_supported', 'details_submitted', 'email', 'statement_descriptor', 'card_types_supported');
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
        $this->copyIfExists($this->attributes, $result, 'charge_enabled', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'currencies_supported', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'details_submitted', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'email', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'statement_descriptor', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'card_types_supported', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
