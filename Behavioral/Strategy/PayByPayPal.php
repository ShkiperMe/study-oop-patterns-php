<?php

namespace Patterns\Behavioral\Strategy;

class PayByPayPal implements PaymentInterface {
  public function pay($amount = 0) {
    print 'Paying ' . $amount . ' using PayPal';
  }

}