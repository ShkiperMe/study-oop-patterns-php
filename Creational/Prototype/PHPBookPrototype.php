<?php

namespace Patterns\Creational\Prototype;

use Patterns\Creational\Prototype\BookPrototype;

class PHPBookPrototype extends BookPrototype {
  function __construct() {
    $this->topic = 'PHP';
  }
  function __clone() {
  }
}