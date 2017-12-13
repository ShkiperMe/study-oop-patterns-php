<?php

namespace Patterns\Behavioral\Visitor;

abstract class InputValue {
  private $_value;

  public function __construct($value) {
    $this->set($value);
  }

  public function set($value) {
    $this->_value = $value;
  }

  public function get() {
    return $this->_value;
  }

  public abstract function acceptVisitor(Visitor $visitor);
}