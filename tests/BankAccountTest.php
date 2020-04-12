<?php

namespace App\Tests;


use App\Service\BankAccount;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class BankAccountTest extends TestCase
{
    protected $ba;

    public function setUp() :void
    {
        $this->ba = new BankAccount;
    }

    public function testBalanceIsInitiallyZero()
    {
        
        $ba = new BankAccount;
        $balance = $ba->getBalance();        
        $this->assertEquals(0, $balance);
    }

   
    public function testBalanceCantBecomeNegative()
    {
        try {
            $this->ba->withdrawMoney(20);
        } catch (RuntimeException $e) {
            $this->assertEquals(0, $this->ba->getBalance());

            return;
        }

        $this->fail();
    }

    public function testDepositingMoney()
    {
        $this->assertEquals(0, $this->ba->getBalance());
        $this->ba->depositMoney(400);
        $this->assertEquals(400, $this->ba->getBalance());

    }
        
    public function testWithdrawingMoney()
    {
        $this->assertEquals(400, $this->ba->getBalance());
        $this->ba->withdrawMoney(50);
        $this->assertEquals(350, $this->ba->getBalance());
    }

}