<?php

namespace Patterns\Structural\Facade;

class TransactionFacade {
  public function transfer($amount) {
    $Bank = new Bank();
    $Client = new Client();
    $Log = new Log();
    $Bank->OpenTransaction();
    $Client->OpenTransaction();
    $Log->logTransaction('Transaction open');
    $Bank->transferMoney(-$amount);
    $Log->logTransaction('Transfer money from bank');
    $Client->transferMoney($amount);
    $Log->logTransaction('Transfer money to client');
    $Bank->CloseTransaction();
    $Client->CloseTransaction();
    $Log->logTransaction('Transaction close');
  }
}