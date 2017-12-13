<?php

namespace Patterns\Structural\Decorator\Tests;

use Patterns\Structural\Decorator\ChristmasEmailBody;
use Patterns\Structural\Decorator\Email;
use Patterns\Structural\Decorator\NewYearEmailBody;

require_once '../../../vendor/autoload.php';

$email = new Email();
$email->loadBody();

$email = new Email();
$email = new ChristmasEmailBody($email);
$email->loadBody();

$email = new Email();
$email = new NewYearEmailBody($email);
$email->loadBody();

$email = new Email();
$email = new ChristmasEmailBody($email);
$email = new NewYearEmailBody($email);
$email->loadBody();