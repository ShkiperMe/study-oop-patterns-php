<?php

namespace Patterns\Behavioral\Strategy;

interface PaymentInterface {
  public function pay($amount);
}