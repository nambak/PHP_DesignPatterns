<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Proxy;

class BankAccountProxy extends HeavyBankAccount implements BankAccount
{
    private $balance = null;

    public function getBalance(): int
    {
        // 잔액 계산이 너무 느리기 때문에 BankAccount::getBalance() 사용은 실제로 필요할 때까지 지연되며 
        // 이 인스턴스에 대해 다시 계산되지 않습니다.

        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}