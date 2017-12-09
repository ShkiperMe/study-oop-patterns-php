<?php

namespace Patterns\Creational\AbstractFactory\Tests;

require_once '../../../vendor/autoload.php';

use Patterns\Creational\AbstractFactory\StatusMessageFactory;
use Patterns\Creational\AbstractFactory\ErrorMessageFactory;

function testMessageFactory($messageFactoryInterface) {
  print $messageFactoryInterface->showMassage()->display();
}


$errorMessageFactoryInstance = new StatusMessageFactory;
testMessageFactory($errorMessageFactoryInstance);

print '<br>';

$errorMessageFactoryInstance = new ErrorMessageFactory;
testMessageFactory($errorMessageFactoryInstance);