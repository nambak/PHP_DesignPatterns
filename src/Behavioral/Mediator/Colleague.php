<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    protected $mediator;

    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}