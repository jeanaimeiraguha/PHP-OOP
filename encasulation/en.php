<?php
class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            return "Insufficient funds.";
        }
        $this->balance -= $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Create an object
$account = new BankAccount(100);
$account->deposit(50);
$account->withdraw(30);

echo "Balance: " . $account->getBalance(); // Balance: 120
?>
