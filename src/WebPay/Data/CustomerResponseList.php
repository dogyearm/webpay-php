<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class CustomerResponseList extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('object', 'url', 'count', 'data');
        $params = $this->normalize($this->fields, $params);
        $params['data'] = is_array($params['data']) ? array_map(function ($x) { return is_array($x) ? new CustomerResponse($x) : $x; }, $params['data']) : $params['data'];
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
        $this->copyIfExists($this->attributes, $result, 'url', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'count', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'data', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
