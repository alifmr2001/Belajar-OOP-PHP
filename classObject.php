<!-- Studi kasus saldo rekening -->
<?php
// membuat class 
class BankAccount
{
    // Membaut property
    public $accountNumber;
    public $balance;

    // Membuat method
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

// Membuat object baru dari class / instantation
$account = new BankAccount();

// cara mengakses property
$account->accountNumber = 1;
$account->balance = 100;

// Menyimpan nilai saldo sebelum deposit
$before_deposit = $account->balance;

// Memanggil method deposit
$account->deposit(100);

// Menyimpan nilai saldo setelah deposit
$after_deposit = $account->balance;

// menampilkan nilai saldo sebelum dan sesudah deposit;
echo "Before deposit= " . $before_deposit . PHP_EOL;
echo "After deposit= " . $after_deposit . PHP_EOL;

$account->withdraw(50);

// Menyimpan nilai saldo setelah withdraw
$after_witdraw = $account->balance;

// Menampilkan nilai setelah withdraw
echo "After withdraw= " . $after_witdraw;






?>