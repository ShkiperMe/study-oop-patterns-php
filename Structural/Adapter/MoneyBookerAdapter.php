<?php

namespace Patterns\Structural\Adapter;

class MoneyBookerAdapter implements paymentAdapter {

  private $moneybooker;

  public function __construct() {
    $this->moneybooker = new MoneyBooker();
  }

  public function pay($amount) {
    $this->moneybooker->doPayment($amount);
  }
}