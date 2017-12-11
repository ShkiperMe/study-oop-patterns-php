<?php

namespace Patterns\Behavioral\Strategy;

class PayByCC implements PaymentInterface {
  public function pay($amount = 0) {
    print 'Paying ' . $amount . ' using Credit Card';
  }

}