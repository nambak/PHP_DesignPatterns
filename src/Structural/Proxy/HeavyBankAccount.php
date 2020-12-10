<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Proxy;

class HeavyBankAccount implements BankAccount
{
    /**
     * @var int[]
     */
    private $transactions = [];

    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        // 이것은 느린 부분입니다. 
        // 수십 년 전의 모든 트랜잭션을 데이터베이스 또는 웹 서비스에서 가져와야하고 
        // 잔액을 계산해야한다고 상상해보십시오.

        return (int) array_sum($this->transactions);
    }
}