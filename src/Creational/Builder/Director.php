<?php declare(strict_types = 1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

/**
 * 사용목적:
 * 빌더는 복잡한 객체의 일부를 생성하는 인터페이스 입니다.
 * 때때로, 빌더는 그것에 대해 더 명확한 정보(Knowledge)를 가질 때,
 * 해당 인터페이스는 기본 메서드(일명 Adapter)를 가진 추상 클래스가 됩니다.
 * 만약 객체들에 복잡한 상속 트리가 있는 경우에, 빌더 또한 복잡한 상속 트리를 가져야 마땅합니다.
 * Note: 빌더들은 보통 유연한 인터페이스를 가지는데, PHPUnit의 mock builder가 그 예 입니다.
 * 
 * Director 는 빌더 패턴의 일부입니다. 
 * 빌더의 인터페이스를 알고 빌더의 도움을 받아 복잡한 개체를 만듭니다.
 * 또한 하나가 아닌 많은 빌더를 주입하여 더 복잡한 개체를 만들 수 있습니다.
 */
class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}