<?php

namespace Patterns\Behavioral\Visitor;


class MultipleInputValue extends InputValue {
  public function acceptVisitor(Visitor $visitor) {
    $visitor->visitMultipleInputValue($this);
  }
}