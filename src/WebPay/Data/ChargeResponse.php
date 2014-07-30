<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class ChargeResponse extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('id', 'object', 'livemode', 'amount', 'card', 'created', 'currency', 'paid', 'captured', 'refunded', 'amount_refunded', 'customer', 'recursion', 'shop', 'description', 'failure_message', 'expire_time', 'fees');
        $params = $this->normalize($this->fields, $params);
        $params['card'] = is_array($params['card']) ? new CardResponse($params['card']) : $params['card'];
        $params['fees'] = is_array($params['fees']) ? array_map(function ($x) { return is_array($x) ? new ChargeFeeResponse($x) : $x; }, $params['fees']) : $params['fees'];
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
        $this->copyIfExists($this->attributes, $result, 'amount', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'card', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'created', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'currency', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'paid', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'captured', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'refunded', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'amount_refunded', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'customer', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'recursion', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'shop', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'description', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'failure_message', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'expire_time', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'fees', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
