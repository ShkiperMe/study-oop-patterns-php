<?php

namespace Patterns\Creational\Builder;

interface PersonBuilderInterface {
  public function setGender();
  public function setEmployed();
  public function setAge();
  public function getResult();
}