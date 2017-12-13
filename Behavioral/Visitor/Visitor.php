<?php

namespace Patterns\Behavioral\Visitor;

interface Visitor {
  public function visitSingleInputValue(SingleInputValue $inputValue);
  public function visitMultipleInputValue(MultipleInputValue $inputValue);
}