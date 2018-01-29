<?php
class BankAccount
{
	public $accountNumber;
	public $balance;

	public function __construct($assignedAccountNumber, $firstDeposit) {
		$this->accountNumber = $assignedAccountNumber;
		$this->balance = $firstDeposit;
	}

// on crée un setter, c'est à dire une fonction
// par convention, on le nomme avec le prefixe "set", mais on peut le nommer autrement.
	public function setBalance($newBalance) {
		if($balance < 10000) {
			throw new Exception("Montant trop faible");
		}
		$this->balance = $newBalance;
	}
}

$compteFaiza = new BankAccount("068794563645", 100);
var_dump($compteFaiza);
$compteFaiza->setBalance(5000);
var_dump($compteFaiza);