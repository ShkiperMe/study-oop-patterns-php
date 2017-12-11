<?php

namespace Patterns\Behavioral\Observer;

class Login implements \SplSubject {
  /**
   * @var string
   */
  private $status;

  /**
   * @var \SplObjectStorage
   */
  private $observers;

  public function __construct() {
    $this->observers = new \SplObjectStorage();
  }

  public function attach(\SplObserver $observer) {
    $this->observers->attach($observer);
  }

  public function detach(\SplObserver $observer) {
    $this->observers->detach($observer);
  }

  public function login($user, $password) {
    $this->setStatus(rand(1, 3));
    $this->notify();
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getStatus() {
    return $this->status;
  }

  public function notify() {
    /** @var \SplObserver $observer */
    foreach ($this->observers as $observer) {
      $observer->update($this);
    }
  }
}