<?php declare(strict_types = 1);

namespace DesignPatterns\Creational\Singleton;

final class Singleton
{
    private static $instance = null;

    /**
     * 지연 초기화를 통해 인스턴스를 가져옵니다 (처음 사용할 때 생성됨).
     */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 다중 인스턴스 생성을 방지하기 위해 외부에서 호출 할 수 없습니다. 
     * 싱글 톤을 사용하려면 대신 Singleton :: getInstance ()에서 인스턴스를 가져와야합니다.
     */
    private function __construct()
    {
        //
    }

    /**
     * 인스턴스 복제 방지 (두 번째 인스턴스 생성)
     */
    private function __clone()
    {
        //
    }

    /**
     * 직렬화 해제 (두 번째 인스턴스 생성) 방지
     */
    private function __wakeup()
    {
        //
    }
}