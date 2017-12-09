<?php

namespace Patterns\Structural\Adapter\Tests;

require_once '../../../vendor/autoload.php';

use Patterns\Structural\Adapter\PaymentManager;
use Patterns\Structural\Adapter\PaypalAdapter;
use Patterns\Structural\Adapter\MoneyBookerAdapter;

$paymentManager = new PaymentManager();
$paymentManager->pay(new PaypalAdapter(), 2629);

print '<br>';

$paymentManager->pay(new MoneyBookerAdapter(), 888);

