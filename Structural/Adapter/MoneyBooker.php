<?php

namespace Patterns\Structural\Adapter;

class MoneyBooker {

  public function __construct() {

  }

  public function doPayment($amount) {
    print 'Paying via MoneyBooker: ' .  $amount;
  }

}
