<?php

namespace Patterns\Structural\Adapter;

class PaypalAdapter implements PaymentAdapter {

  private $paypal;

  public function __construct() {
    $this->paypal = new PayPal();
  }

  public function pay($amount) {
    $this->paypal->sendPayment($amount);
  }
}
