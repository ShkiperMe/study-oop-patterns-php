<?php

namespace Patterns\Structural\Adapter;

interface PaymentAdapter {
  public function pay($amount);
}
