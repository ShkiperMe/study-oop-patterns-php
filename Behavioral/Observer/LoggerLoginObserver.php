<?php

namespace Patterns\Behavioral\Observer;

class LoggerLoginObserver implements \SplObserver {

  public function update(\SplSubject $subject) {
    switch ($subject->getStatus()) {
      case 1:
        print 'Success';
        break;

      case 2:
        print 'Wrong pass';
        break;

      case 3:
        print 'Blocked';
        break;
    }
  }

}