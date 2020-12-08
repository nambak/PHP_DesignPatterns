<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Composite;

class TextElement implements Renderable
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}