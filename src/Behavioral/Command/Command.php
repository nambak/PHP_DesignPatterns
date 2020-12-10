<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Command;

interface Command
{
    /**
     * 이것은 Command 패턴에서 가장 중요한 방법이며, Receiver는 생성자에 들어갑니다. 
     */
    public function execute();   
}