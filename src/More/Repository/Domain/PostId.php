<?php declare(strict_types = 1);

namespace DesignPatterns\More\Repository\Domain;

use InvalidArgumentException;
use PDO;

/**
 * 이것은 값만으로 식별 할 수 있고 인스턴스가 생성 될 때마다 유효 함이 보장되는 값 객체의 완벽한 예입니다. 
 * 값 객체의 또 다른 중요한 속성은 불변성입니다.
 * 
 * 인스턴스를 만들 때 약간의 컨텍스트를 추가하는 명명된 생성자(fromInt)의 사용도 확인하세요.
 */
class PostId
{
    private $id;

    public static function fromInt(int $id): PostId
    {
        self::ensureIsValid($id);

        return new self($id);
    }

    private function __construct(int $id)
    {
        $this->id = $id;
    }

    public function toInt(): int
    {
        return $this->id;
    }

    private static function ensureIsValid(int $id)
    {
        if ($id <= 0) {
            throw new InvalidArgumentException('Invalid PostId given');
        }
    }
}