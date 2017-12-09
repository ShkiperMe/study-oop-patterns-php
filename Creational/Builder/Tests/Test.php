<?php

namespace Patterns\Creational\Builder\Tests;

require_once '../../../vendor/autoload.php';

use Patterns\Creational\Builder\PersonDirector;
use Patterns\Creational\Builder\EmployedMaleBuilder;
use Patterns\Creational\Builder\EmployedFemaleBuilder;

$director                = new PersonDirector();

$employedMaleBuilder     = new EmployedMaleBuilder();
$employedMale            = $director->build($employedMaleBuilder);
print_r($employedMale);

print '<br>';

$employedFemaleBuilder   = new EmployedFemaleBuilder();
$employedFemale   = $director->build($employedFemaleBuilder);
print_r($employedFemale);