<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Composite;

/**
 * 복합 노드는 구성 요소 계약을 확장해야합니다. 
 * 이는 구성 요소 트리를 구축하는 데 필수입니다.
 */
class Form implements Renderable
{
    /**
     * @var Renderable[]
     */
    private $elements;

    /**
     * 모든 요소를 실행하고 해당 요소에 대해 render()를 호출 한 다음 양식의 완전한 표현을 반환합니다.
     * 외부에서 보면 이것을 볼 수 없으며 양식은 단일 개체 인스턴스처럼 작동합니다.
     */
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}