<?php

namespace Patterns\Behavioral\Visitor;


class IntFilter implements Visitor {
  public function visitSingleInputValue(SingleInputValue $inputValue) {
    $inputValue->set((int) $inputValue->get());
  }

  public function visitMultipleInputValue(MultipleInputValue $inputValue) {
    $newValues = array();
    foreach ($inputValue->get() as $index => $value) {
      $newValues[$index] = (int) $value;
    }
    $inputValue->set($newValues);
  }
}
