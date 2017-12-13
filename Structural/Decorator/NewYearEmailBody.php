<?php

namespace Patterns\Structural\Decorator;


class NewYearEmailBody extends emailBodyDecorator {

  public function loadBody() {

    print 'This is Extra Content for New Year.<br />';
    $this->emailBody->loadBody();

  }

}