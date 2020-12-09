<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\DataMapper;

use DesignPatterns\Structural\DataMapper\User;
use InvalidArgumentException;

class UserMapper
{
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    /**
     * ID를 기반으로 저장소에서 사용자를 찾고 메모리에있는 User개체를 반환합니다. 
     * 일반적으로 이러한 종류의 논리는 Repository패턴을 사용하여 구현됩니다.
     * 그러나 중요한 부분은 아래의 mapRowToUser()에 있으며 
     * 스토리지에서 가져온 데이터에서 비즈니스 객체를 생성합니다.
     */
    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}