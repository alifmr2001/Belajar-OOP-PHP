<!-- Studi kasus : Transfer saldo antar rekening -->

<?php

class Bank
{
    public $nomor_akun;
    public $saldo;

    public function setor($jumlah)
    {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
        }
    }

    public function penarikan($jumlah)
    {
        if ($this->saldo >= $jumlah) {
            $this->saldo -= $jumlah;
        }
    }

    public function transfer($tujuan, $jumlah)
    {
        if ($jumlah > 0 && $this->saldo >= $jumlah) {
            $this->saldo -= $jumlah;
            $tujuan->saldo += $jumlah;
        }
    }
}

$akun_A = new Bank();
$akun_B = new Bank();

$akun_A->saldo = 1000;
$akun_B->saldo = 1000;

// Transfer dari akun A ke akun B
$akun_A->transfer($akun_B, 500);

// Menampilkan saldo akun A dan akun B
echo "Akun A: " . $akun_A->saldo . PHP_EOL;
echo "Akun B: " . $akun_B->saldo . PHP_EOL;


?>