<?php

namespace Patterns\Structural\Decorator\Tests;

require_once '../../../vendor/autoload.php';

use Patterns\Structural\Decorator\Book;
use Patterns\Structural\Decorator\BookTitleDecorator;
use Patterns\Structural\Decorator\BookTitleStarDecorator;
use Patterns\Structural\Decorator\BookTitleExclaimDecorator;

$patternBook = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
$decorator = new BookTitleDecorator($patternBook);
$starDecorator = new BookTitleStarDecorator($decorator);
$exclaimDecorator = new BookTitleExclaimDecorator($decorator);

print $decorator->showTitle();
print '<br>';

$exclaimDecorator->exclaimTitle();
$exclaimDecorator->exclaimTitle();

print $decorator->showTitle();
print '<br>';

$starDecorator->starTitle();

print $decorator->showTitle();
print '<br>';

$decorator->resetTitle();
print $decorator->showTitle();
print '<br>';