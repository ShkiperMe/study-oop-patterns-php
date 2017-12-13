<?php

namespace Patterns\Structural\Decorator;


class Email implements EmailBody {
  public function loadBody() {
    print 'This is Main Email body.<br />';
  }
}