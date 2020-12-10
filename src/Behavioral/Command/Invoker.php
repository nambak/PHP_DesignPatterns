<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Command;

class Invoker
{
    private $command;

    /**
     * 호출자에서 우리는 명령을 구독하기위한 이런 종류의 방법을 찾습니다. 
     * 스택, 목록, 고정 세트도 있을 수 있습니다.
     */
    public function setCommand(Command $cmd)
    {
        $this->command = $cmd;
    }

    /**
     * 명령을 실행합니다. 호출자는 명령이 무엇이든 동일합니다.
     */
    public function run()
    {
        $this->command->execute();
    }
}