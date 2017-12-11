<?php

namespace Patterns\Behavioral\Strategy;

class PayByMB implements PaymentInterface {
  public function pay($amount = 0) {
    print 'Paying ' . $amount . ' using Money Booker';
  }

}