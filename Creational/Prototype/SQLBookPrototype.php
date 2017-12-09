<?php

namespace Patterns\Creational\Prototype;

use Patterns\Creational\Prototype\BookPrototype;

class SQLBookPrototype extends BookPrototype {
  function __construct() {
    $this->topic = 'SQL';
  }
  function __clone() {
  }
}