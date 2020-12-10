<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Command;

/**
 * 이 구체적인 명령은 Receiver에서 "인쇄"를 호출하지만 
 * 외부 호출자는 "실행"을 호출 할 수 있다는 것을 알고 있습니다.
 */
class HelloCommand implements Command
{
    private $output;

    /**
     * 각 구체적인 명령은 서로 다른 receiver로 빌드됩니다.
     * recevier는 하나 또는 많거나 완전히 없을 수 있지만 
     * 매개 변수에는 다른 명령이 있을 수 있습니다.
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * "Hello World"를 실행하고 출력합니다.
     */
    public function execute()
    {
        // 때로는 수신자가없고 이것이 모든 작업을 수행하는 명령일 수 있습니다.
        $this->output->write('Hello World');
    }
}