<?php

namespace Patterns\Behavioral\Observer\Tests;

use Patterns\Behavioral\Observer\LoggerLoginObserver;
use Patterns\Behavioral\Observer\LoginObserver;
use Patterns\Behavioral\Observer\Login;

require_once '../../../vendor/autoload.php';

$loginObserver = new LoginObserver();
$loggerLoginObserver = new LoggerLoginObserver();

$login = new Login();
$login->attach($loginObserver);
$login->attach($loggerLoginObserver);

$login->login('foo@bar.com', 'qqq111');