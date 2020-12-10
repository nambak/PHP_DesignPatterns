<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Command;

/**
 * Receiver는 자체 계약이있는 특정 서비스이며 구체적 일 수 있습니다.
 */
class Receiver
{
    private $enableDate = false;

    /**
     * @var string[]
     */
    private $output = [];

    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= ' [' . date('Y-m-d') . ']';
        }

        $this->output[] = $str;
    }

    public function getOutput(): string
    {
        return join("\n", $this->output);
    }

    /**
     * receiver가 메시지 날짜를 표시하도록 설정
     */
    public function enableDate()
    {
        $this->enableDate = true;
    }

    /**
     * receiver를 비활성화하여 메시지 날짜 표시
     */
    public function disableDate()
    {
        $this->enableDate = false;
    }
}