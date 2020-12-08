<?php declare(strict_types = 1);

namespace Tests;

use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\InputElement;
use DesignPatterns\Structural\Composite\TextElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        // 이것은 단지 예일뿐입니다. 
        // 실제 시나리오에서는 웹 브라우저가 현재 중첩 된 양식을 지원하지 않는다는 점을 기억하는 것이 중요합니다.

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}