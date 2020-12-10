<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Command;

interface UndoableCommand extends Command
{
    /**
     * 이 방법은 명령 실행으로 인한 변경을 취소하는 데 사용됩니다.
     */
    public function undo();
}