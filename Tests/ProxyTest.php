<?php declare(strict_types = 1);

namespace Tests;

use DesignPatterns\Structural\Proxy\BankAccountProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxyWillOnlyExecuteExpensiveGetBalanceOnce()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        // 이 때는 잔액이 계산됩니다.
        $this->assertSame(30, $bankAccount->getBalance());

        // 상속은 BankAccountProxy가 ServerBankAccount와 똑같이 외부인에게 동작하도록 허용합니다.
        $bankAccount->deposit(50);

        // 이번에는 이전에 계산 된 잔액이 다시 계산되지 않고 다시 반환됩니다.
        $this->assertSame(30, $bankAccount->getBalance());
    }
}