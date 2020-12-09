<?php declare(strict_types = 1);

namespace Tests;

use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'root', 'root');
        $connection = new DatabaseConnection($config);

        $this->assertSame('root:root@localhost3306', $connection->getDsn());
    }
}