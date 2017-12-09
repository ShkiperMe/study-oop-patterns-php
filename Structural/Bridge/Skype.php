<?php

namespace Patterns\Structural\Bridge;

class Skype implements MessagingInterface {
  public function send($body) {
    print $body . ' via Skype';
  }
}