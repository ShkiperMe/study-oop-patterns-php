<?php

namespace Patterns\Structural\Decorator;


abstract class EmailBodyDecorator implements EmailBody {

  protected $emailBody;

  public function __construct(EmailBody $emailBody) {
    $this->emailBody = $emailBody;
  }

  abstract public function loadBody();

}