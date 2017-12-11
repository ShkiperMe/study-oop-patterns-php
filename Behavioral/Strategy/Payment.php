<?php

namespace Patterns\Behavioral\Strategy;

class Payment {

  private $amount;
  private $payment;


  public function __construct($amount) {
    $this->amount = $amount;
  }

  public function pay() {
    if (!$this->payment) {
      throw new \LogicException('Payment is not set');
    }
    $this->payment->pay($this->amount);
  }

  /**
   * @param PaymentInterface $payment
   */
  public function setPayment(PaymentInterface $payment) {
    $this->payment = $payment;
  }

}