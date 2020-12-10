<?php declare(strict_types = 1);

namespace DesignPattern\Structural\Registry;

use DesignPatterns\Structural\Bridge\Service;
use InvalidArgumentException;

abstract class Registry
{
    const LOGGER = 'logger';

    /**
     * 테스트를 위해 mock할 수 없는 글로벌 상태를 애플리케이션에 도입하여 안티 패턴으로 간주됩니다! 
     * 대신 의존성 주입을 사용하십시오!
     * 
     * @var Service[]
     */
    private static $services = [];

    private static $allowedKeys = [
        self::LOGGER
    ];

    public static function set(string $key, Service $value)
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new InvalidArgumentException('Invalid key given');
        }

        self::$services[$key] = $value;
    }

    public function get(string $key): Service
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$services[$key])) {
            throw new InvalidArgumentException('Invalid key given');
        }

        return self::$services[$key];
    }
}