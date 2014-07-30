<?php

namespace WebPay\Data;

use WebPay\AbstractData;

class EventResponse extends AbstractData
{

    public function __construct(array $params)
    {
        $this->fields = array('id', 'object', 'livemode', 'created', 'data', 'pending_webhooks', 'type', 'shop');
        $params = $this->normalize($this->fields, $params);
        $params['data'] = is_array($params['data']) ? new EventData($params['data']) : $params['data'];
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
        $this->copyIfExists($this->attributes, $result, 'data', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'pending_webhooks', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'type', 'requestBody');
        $this->copyIfExists($this->attributes, $result, 'shop', 'requestBody');

        return $result;
    }

    public function queryParams()
    {
        $result = array();

        return $result;
    }
}
