<?php declare(strict_types = 1);

namespace Tests;

use DesignPattern\Structural\Registry\Registry;
use DesignPattern\Structural\Registry\Service;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class RegistyTest extends TestCase
{
    /**
     * @var Service
     */
    private $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, $this->service);

        $this->assertSame($this->service, Registry::get(Registry::LOGGER));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        $this->expectException(InvalidArgumentException::class);

        Registry::set('foobar', $this->service);
    }

    /**
     * 여기에서 @runInSeparateProcess에 유의하십시오. 
     * 그렇지 않으면 이전 테스트에서 이미 설정했을 수 있으며 테스트가 불가능할 것입니다. 
     * 그렇기 때문에 주입된 클래스가 목업으로 쉽게 대체 될 수있는 종속성 주입을 구현해야합니다.
     * 
     * @runInSeparateProcess
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        $this->expectException(InvalidArgumentException::class);

        Registry::get(Registry::LOGGER);
    }
}