<?php

namespace Patterns\Structural\Facade\Tests;

require_once '../../../vendor/autoload.php';

use Patterns\Structural\Facade\TransactionFacade;

$transfer = new TransactionFacade();
$transfer->transfer(1000);