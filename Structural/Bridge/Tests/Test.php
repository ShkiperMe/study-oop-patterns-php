<?php

namespace Patterns\Structural\Bridge\Tests;

require_once '../../../vendor/autoload.php';

use Patterns\Structural\Bridge\Phone;
use Patterns\Structural\Bridge\Skype;
use Patterns\Structural\Bridge\Tablet;
use Patterns\Structural\Bridge\Whatsapp;

$phone = new Phone;
$phone->setSender(new Skype);

$phone->send("Hey Buddy");

print '<br>';

$phone->setSender(new Whatsapp());

$phone->send("Hey Buddy");

print '<br>';

$tablet = new Tablet();
$tablet->setSender(new Skype);

$tablet->send("Hey Buddy");

