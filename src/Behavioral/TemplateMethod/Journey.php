<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Journey
{
    /**
     * @var string[]
     */
    private $thingsToDo = [];

    /**
     * 이것은 이 클래스와 그 하위 클래스에서 제공하는 공용 서비스입니다.
     * 알고리즘의 전역 동작을 "고정"하는 것이 최종적인 것입니다.
     * 이 계약을 재정의하려면 takeATrip()만으로 인터페이스를 만들고 하위 클래스를 만듭니다.
     */
    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        $buyGift = $this->buyGift();

        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    /**
     * 이 method을 구현해야합니다. 이것이 이 패턴의 핵심 기능입니다.
     */
    abstract protected function enjoyVacation(): string;

    /**
     * 이 메서드도 알고리즘의 일부이지만 선택 사항입니다. 
     * 필요한 경우에만 재정의 할 수 있습니다.
     */
    protected function buyGift(): ?string
    {
        return null;
    }

    private function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    private function takePlane(): string
    {
        return 'Taking the plane';
    }

    /**
     * @return string[]
     */
    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }
}