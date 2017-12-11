<?php

namespace Patterns\Behavioral\Strategy\Tests;

require_once '../../../vendor/autoload.php';

use Patterns\Behavioral\Strategy\PayByCC;
use Patterns\Behavioral\Strategy\PayByMB;
use Patterns\Behavioral\Strategy\PayByPayPal;
use Patterns\Behavioral\Strategy\Payment;

$payment = new Payment(125);

$providers = [
  new PayByCC(),
  new PayByPayPal(),
  new PayByMB(),
];

$payment->setPayment($providers[array_rand($providers)]);
$payment->pay();
