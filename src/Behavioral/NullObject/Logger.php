<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\NullObject;

/**
 * 주요 기능 : NullLogger는 다른 로거와 마찬가지로 이 인터페이스에서 상속해야합니다.
 */
interface Logger
{
    public function log(string $str);
}