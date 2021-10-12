<?php

namespace vzhabonos\PrivatBank;

/**
 * Class Client
 *
 * @property Merchant|null $merchant
 */
class Client
{
    protected $merchant = null;

    public function __construct(Merchant $merchant = null)
    {
        $this->merchant = $merchant;
    }


}