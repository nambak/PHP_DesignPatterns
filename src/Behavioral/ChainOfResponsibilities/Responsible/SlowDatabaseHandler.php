<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    protected function processing(RequestInterface $request): ?string
    {
        // 이것은 mockup이며, 프로덕션 코드에서는 결과를 위해 느린(인메모리에 비해) DB를 query할 것입니다.

        return 'Hello World!';
    }
}