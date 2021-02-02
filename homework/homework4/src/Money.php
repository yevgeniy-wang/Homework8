<?php

namespace Hillel\Homework4;

class Money
{
    private $amount;
    private $currency;

    public function __construct($amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    private function setAmount($amount)
    {
        if (!is_numeric($amount)) {
            throw new \InvalidArgumentException('Amount should be a number');
        } elseif ($amount <= 0) throw new \InvalidArgumentException('Amount should be greater than 0');

        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    private function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function equals(Money $money)
    {
        $result = true;

        if ($this->amount != $money->amount || $this->currency != $money->currency) {
            $result = false;
        }

        return $result;
    }

    public function add(Money $money)
    {

        if ($this->currency == $money->currency) {
            $result = $this->amount + $money->amount;
        } else throw new \InvalidArgumentException('Currencies are not same');

        return $result;
    }
}