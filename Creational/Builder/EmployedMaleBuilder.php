<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\PersonBuilderInterface;
use Patterns\Creational\Builder\Person;

class EmployedMaleBuilder implements PersonBuilderInterface {
  private $person;

  public function __construct() {
    $this->person = new Person();
  }

  public function setGender() {
    $this->person->gender = Person::GENDER_MALE;
  }

  public function setEmployed() {
    $this->person->employed = true;
  }

  public function getResult() {
    return $this->person;
  }

}