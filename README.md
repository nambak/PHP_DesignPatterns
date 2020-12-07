# PHP Design Patterns


모든 소스 파일은 [DesignPatternsPHP](https://designpatternsphp.readthedocs.io/) 사이트에 있은 것을 가져왔습니다.

1. 생성패턴
  1.1 추상팩토리: 구체적인 클래스를 지정하지 않고 일련의 관련 또는 종속 객체를 생성합니다. 일반적으로 생성 된 클래스는 모두 동일한 인터페이스를 구현합니다. 추상 팩토리의 클라이언트는 이러한 객체가 어떻게 만들어 지는지 신경 쓰지 않고 어떻게 함께 이동하는지 알고 있습니다.
  1.2 빌더: Builder는 복잡한 개체의 일부를 빌드하는 인터페이스입니다.
때로는 빌더가 빌드하는 것에 대해 더 잘 알고있는 경우이 인터페이스는 기본 메소드 (일명 어댑터)가있는 추상 클래스가 될 수 있습니다.
객체에 대한 복잡한 상속 트리가있는 경우 빌더에 대한 복잡한 상속 트리도 갖는 것이 논리적입니다.
참고 : 빌더는 종종 유창한 인터페이스를 가지고 있습니다. 예를 들어 PHPUnit의 모의 빌더를 참조하십시오.
