<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\State;

class StateDone implements State
{
    public function proceedToNext(OrderContext $context)
    {
        // 더 이상 할 일이 없습니다.
    }

    public function toString(): string
    {
        return 'done';        
    }
}