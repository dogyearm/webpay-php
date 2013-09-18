<?php

namespace WebPay\Model;

class Token extends Entity {

    public function __construct($client, $data)
    {
        if ($data['card']) {
            $data['card'] = new Card($data['card']);
        }
        parent::__construct($client, $data);
    }
}