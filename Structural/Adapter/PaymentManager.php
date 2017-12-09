<?php

namespace Patterns\Structural\Adapter;

class  PaymentManager {
  public function pay(PaymentAdapter $adapter, $amount) {
    $adapter->pay($amount);
  }
}