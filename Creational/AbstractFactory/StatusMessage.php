<?php

namespace Patterns\Creational\AbstractFactory;

use Patterns\Creational\AbstractFactory\Message;

class StatusMessage extends Message {
  function display() {
    return 'status';
  }
}