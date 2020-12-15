<?php declare(strict_types = 1);

namespace DesignPatterns\More\Repository\Domain;

use InvalidArgumentException;

/**
 * PostId와 마찬가지로 이것은 Post의 현재 상태 값을 보유하는 값 객체입니다. 
 * 문자열이나 정수로 구성 할 수 있으며 자체 유효성을 검사 할 수 있습니다. 
 * 그런 다음 인스턴스를 다시 int 또는 문자열로 변환 할 수 있습니다.
 */
class PostStatus
{
    const STATE_DRAFT_ID = 1;
    const STATE_PUBLISHED_ID = 2;
    
    const STATE_DRAFT = 'draft';
    const STATE_PUBLISHED = 'published';

    private static $validStates = [
        self::STATE_DRAFT_ID => self::STATE_DRAFT,
        self::STATE_PUBLISHED_ID => self::STATE_PUBLISHED,
    ];

    private $id;
    private $name;

    public static function fromInt(int $statusId)
    {
        self::ensureIsValidId($statusId);

        return new self($statusId, self::$validStates[$statusId]);
    }

    public static function fromString(string $status)
    {
        self::ensureIsValidName($status);
        $state = array_search($status, self::$validStates);

        if ($state === false) {
            throw new InvalidArgumentException('Invalid state given');
        }

        return new self($state, $status);
    }

    private function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function toInt(): int
    {
        return $this->id;
    }
    
    /**
     * PHP의 스택 외부에서 작동하기 때문에 __toString () 사용을 피하는 이유가 있으며,
     * 예외로 잘 작동 할 수 없습니다.
     */
    public function toString(): string
    {
        return $this->name;
    }

    private static function ensureIsValidId(int $status)
    {
        if (!in_array($status, array_keys(self::$validStates), true)) {
            throw new InvalidArgumentException('Invalid status id given');
        }
    }

    private static function ensureIsValidName(string $status)
    {
        if (!in_array($status, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid status name given');
        }
    }
}