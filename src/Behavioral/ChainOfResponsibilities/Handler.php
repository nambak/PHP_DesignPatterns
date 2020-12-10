<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    private $successor = null;

    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    /**
     * 템플릿 메서드 패턴을 사용하는 이 접근 방식은 
     * 각 하위 클래스가 후속 작업을 호출하는 것을 잊지 않도록합니다.
     */
    final public function handle(RequestInterface $request): ?string
    {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor !== null) {
            // 이 핸들러에 의해 요청이 처리되지 않았습니다 => 다음 참조
            $processed = $this->successor->handle($request);
        }

        return $processed;
    }

    abstract protected function processing(RequestInterface $request): ?string;
}