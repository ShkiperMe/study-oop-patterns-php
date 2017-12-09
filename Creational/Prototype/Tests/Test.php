<?php

namespace Patterns\Creational\Prototype\Tests;

require_once '../../../vendor/autoload.php';

use Patterns\Creational\Prototype\PHPBookPrototype;
use Patterns\Creational\Prototype\SQLBookPrototype;

$phpProto = new PHPBookPrototype();
$sqlProto = new SQLBookPrototype();

$book1 = clone $sqlProto;
$book1->setTitle('SQL For Cats');
print 'Book 1 topic: ' . $book1->getTopic() . '<br>';
print 'Book 1 title: ' . $book1->getTitle() . '<br>';


$book2 = clone $phpProto;
$book2->setTitle('OReilly Learning PHP 5');
print 'Book 2 topic: ' . $book2->getTopic() . '<br>';
print 'Book 2 title: ' . $book2->getTitle() . '<br>';


$book3 = clone $sqlProto;
$book3->setTitle('OReilly Learning SQL');
print 'Book 3 topic: ' . $book3->getTopic() . '<br>';
print 'Book 3 title: ' . $book3->getTitle() . '<br>';