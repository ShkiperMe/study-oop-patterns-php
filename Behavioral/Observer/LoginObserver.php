<?php

namespace Patterns\Behavioral\Observer;

class LoginObserver implements \SplObserver {

  public function update(\SplSubject $subject) {
    print $subject->getStatus();
  }

}