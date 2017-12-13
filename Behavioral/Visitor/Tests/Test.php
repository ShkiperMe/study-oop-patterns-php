<?php

namespace Patterns\Behavioral\Visitor\Tests;

use Patterns\Behavioral\Visitor\AscendingSort;
use Patterns\Behavioral\Visitor\IntFilter;
use Patterns\Behavioral\Visitor\MultipleInputValue;
use Patterns\Behavioral\Visitor\SingleInputValue;

require_once '../../../vendor/autoload.php';

$userId = new SingleInputValue('42');
$categories = new MultipleInputValue(array('hated' => 16, 'ordinary' => 23, 'preferred' => 15));
$userId->acceptVisitor(new IntFilter);
var_dump($userId->get());
$categories->acceptVisitor(new AscendingSort);
var_dump($categories->get());