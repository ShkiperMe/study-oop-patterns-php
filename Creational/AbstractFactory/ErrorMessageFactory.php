<?php

namespace Patterns\Creational\AbstractFactory;

use Patterns\Creational\AbstractFactory\AbstractMessageFactory;
use Patterns\Creational\AbstractFactory\ErrorMessage;

class ErrorMessageFactory extends AbstractMessageFactory {
  public function showMassage() {
    return new ErrorMessage;
  }
}
