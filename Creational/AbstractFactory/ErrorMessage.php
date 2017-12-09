<?php

namespace Patterns\Creational\AbstractFactory;

use Patterns\Creational\AbstractFactory\Message;

class ErrorMessage extends Message {
  function display() {
    return 'error';
  }
}
