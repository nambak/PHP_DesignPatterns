<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\NullObject;

class Service
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * do something...
     */
    public function doSomething()
    {
        // logger가 설정되어 있는지 확인할 필요가 없습니다. 예를 들어 is_null(), 대신 사용하십시오.
        $this->logger->log('We are in ' . __METHOD__);
    }
}