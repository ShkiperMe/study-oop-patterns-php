<?php

namespace Patterns\Creational\AbstractFactory;

use Patterns\Creational\AbstractFactory\AbstractMessageFactory;
use Patterns\Creational\AbstractFactory\StatusMessage;

class StatusMessageFactory extends AbstractMessageFactory {
  public function showMassage() {
    return new StatusMessage;
  }
}
