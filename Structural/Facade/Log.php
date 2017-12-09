<?php

namespace Patterns\Structural\Facade;

class Log {
  public function logTransaction($message) {
    print $message . '<br>';
  }
}