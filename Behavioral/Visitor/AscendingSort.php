<?php

namespace Patterns\Behavioral\Visitor;


class AscendingSort implements Visitor {

  public function visitSingleInputValue(SingleInputValue $inputValue) {
  }

  public function visitMultipleInputValue(MultipleInputValue $inputValue) {
    $values = $inputValue->get();
    asort($values);
    $inputValue->set($values);
  }
}