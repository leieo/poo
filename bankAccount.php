<?php
class BankAccount
{
	public $accountNumber;
	public $balance;

	public function __construct($assignedAccountNumber, $firstDeposit) {
		$this->accountNumber = $assignedAccountNumber;
		$this->balance = $firstDeposit;
	}

// on crée un setter (c'est à dire une fonction)
// par convention, on met le prefixe "set", mais on peut le nommer autrement
// ici, on s'assure d'un montant minimum avant d'autoriser à modifier le solde
	public function setBalance($newBalance) {
		if($newBalance < 100) {
			throw new Exception("Montant trop faible");
		}
		$this->balance = $newBalance;
	}

// on crée un getter (c'est à dire une fonction)
// par convention, on met le prefixe "set", mais on peut le nommer autrement
// ici, il permet de multiplier le solde par 100 pour l'exprimer en cents
	public function getBalance() {
		return $this->balance * 100;
	}
}

$compteFaiza = new BankAccount("068794563645", 100);
$compteFaiza->setBalance(500);
echo $compteFaiza->balance . ' dollars' . PHP_EOL;
echo $compteFaiza->getBalance() . ' cents' . PHP_EOL;