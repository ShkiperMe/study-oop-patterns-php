<?php

namespace Patterns\Structural\Decorator;


class ChristmasEmailBody extends EmailBodyDecorator {

  public function loadBody() {

    print 'This is Extra Content for Christmas<br />';
    $this->emailBody->loadBody();

  }

}
