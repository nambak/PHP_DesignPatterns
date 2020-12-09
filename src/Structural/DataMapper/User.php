<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\DataMapper;

class User
{
    private $username;
    private $email;

    public static function fromState(array $state): User
    {
        // 키에 액세스하기 전에 상태를 확인하십시오!

        return new self(
            $state['username'],
            $state['email']
        );
    }

    public function __construct(string $username, string $email)
    {
        // 매개 변수를 설정하기 전에 유효성을 검사하십시오!

        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}