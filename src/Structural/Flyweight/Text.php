<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Flyweight;

/**
 * 이것은 모든 Flyweight가 구현하는 데 필요한 인터페이스입니다.
 */
interface Text
{
    public function render(string $extrinsicState): string;
}