<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Command;

/**
 * 이 구체적인 명령은 수신자를 조정하여 메시지에 현재 날짜를 추가합니다. 
 * 호출자는 "execute"를 호출 할 수 있다는 것을 알고 있습니다.
 */
class AddMessageDateCommand implements UndoableCommand
{
    private $output;

    /**
     * 각 구체적인 명령은 서로 다른 receiver로 빌드됩니다.
     * receiver는 하나 또는 많거나 완전히 없을 수 있지만 
     * 매개 변수에는 다른 명령이있을 수 있습니다.
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * receiver를 실행하여 메시지 날짜 표시를 활성화합니다.
     */
    public function execute()
    {
        // 때로는 recevier가 없고 이것이 모든 작업을 수행하는 명령일 수 있습니다.
        $this->output->enableDate();
    }

    /**
     * 명령을 실행 취소하고 receiver를 작성하여 메시지 날짜 표시를 비활성화 합니다.
     */
    public function undo()
    {
        // 때로는 receiver가 없고 이것이 모든 작업을 수행하는 명령일 수 있습니다.   
        $this->output->disableDate();
    }
}