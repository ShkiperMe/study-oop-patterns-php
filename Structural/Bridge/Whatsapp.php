<?php

namespace Patterns\Structural\Bridge;

class Whatsapp implements MessagingInterface {
  public function send($body) {
    print $body . ' via Whatsapp';
  }
}