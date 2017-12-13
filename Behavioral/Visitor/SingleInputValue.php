<?php

namespace Patterns\Behavioral\Visitor;


class SingleInputValue extends InputValue {
  public function acceptVisitor(Visitor $visitor) {
    $visitor->visitSingleInputValue($this);
  }
}