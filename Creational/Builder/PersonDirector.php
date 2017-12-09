<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\PersonBuilderInterface;

class PersonDirector {
  public function build(PersonBuilderInterface $builder) {
    $builder->setGender();
    $builder->setEmployed();
    $builder->setAge();

    return $builder->getResult();
  }

}
