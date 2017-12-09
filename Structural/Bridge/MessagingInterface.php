<?php

namespace Patterns\Structural\Bridge;

interface MessagingInterface {
  public function send($body);
}