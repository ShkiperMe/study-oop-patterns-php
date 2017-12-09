<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\PersonBuilderInterface;
use Patterns\Creational\Builder\Person;

class EmployedFemaleBuilder implements PersonBuilderInterface {
  private $person;

  public function __construct() {
    $this->person = new Person();
  }

  public function setGender() {
    $this->person->gender = Person::GENDER_FEMALE;
  }

  public function setEmployed() {
    $this->person->employed = true;
  }

  public function setAge() {
    $this->person->age = 25;
  }

  public function getResult() {
    return $this->person;
  }

}