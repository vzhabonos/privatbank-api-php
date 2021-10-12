<?php

namespace vzhabonos\PrivatBank;


class Merchant
{
    protected $id;
    protected $secret;

    public function __construct($id, $secret)
    {
        $this->id = $id;
        $this->secret = $secret;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }
}