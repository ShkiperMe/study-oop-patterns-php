<?php

namespace Patterns\Structural\Adapter;

class PayPal {

  public function __construct() {

  }

  public function sendPayment($amount) {
    print "Paying via PayPal: " . $amount;
  }

}