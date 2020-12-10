# PHP Design Patterns


모든 소스 파일은 [DesignPatternsPHP](https://designpatternsphp.readthedocs.io/) 사이트에 있는 것을 가져왔습니다.

* ## Creational
  소프트웨어 엔지니어링에서 Creational 디자인 패턴은 상황에 맞는 방식으로 객체를 생성하려고 시도하면서 객체 생성 메커니즘을 다루는 디자인 패턴입니다. 
  객체 생성의 기본 형태는 디자인 문제를 야기하거나 디자인에 복잡성을 추가 할 수 있습니다. 
  Creational 디자인 패턴은 이 객체 생성을 어떻게 든 제어함으로써이 문제를 해결합니다.
  * ### Abstract Factory:
    구체적인 클래스를 지정하지 않고 일련의 관련 또는 종속 객체를 생성합니다.
    일반적으로 생성 된 클래스는 모두 동일한 인터페이스를 구현합니다.
    Abstract Factory의 클라이언트는 이러한 객체가 어떻게 만들어 지는지 신경 쓰지 않고 어떻게 함께 이동하는지 알고 있습니다.
  * ### Builder: 
    Builder는 복잡한 개체의 일부를 빌드하는 인터페이스입니다.
    때로는 Builder가 빌드하는 것에 대해 더 잘 알고있는 경우이 인터페이스는 기본 메소드 (일명 어댑터)가있는 추상 클래스가 될 수 있습니다.
    객체에 대한 복잡한 상속 트리가있는 경우 빌더에 대한 복잡한 상속 트리도 갖는 것이 논리적입니다.
    참고 : Builder는 종종 유창한 인터페이스를 가지고 있습니다. 예를 들어 PHPUnit의 mock builder를 참조하십시오.
  * ### Factory Method: 
    SimpleFactory에 대한 좋은 점은 객체를 생성하는 다양한 방법을 구현하기 위해 하위 클래스를 만들 수 있다는 것입니다.
    간단한 경우에 이 추상 클래스는 인터페이스 일 수 있습니다.
    이 패턴은 SOLID 원칙에서 "D"라고하는 종속성 반전 원칙을 달성하기 때문에 "실제"디자인 패턴입니다.
    이는 Factory Method 클래스가 구체적인 클래스가 아니라 추상화에 의존한다는 것을 의미합니다. 
    이것은 SimpleFactory 또는 StaticFactory에 비해 실제 트릭입니다.
  * ### Pool: 
    개체 Pool 패턴은 필요에 따라 할당 및 삭제하는 대신 사용할 준비가 된 초기화 된 개체 세트("Pool")를 사용하는 소프트웨어 생성 디자인 패턴입니다. 
    Pool의 클라이언트는 Pool에서 개체를 요청하고 반환 된 개체에 대해 작업을 수행합니다. 
    클라이언트가 완료되면 특정 유형의 팩토리 개체인 개체를 삭제하지 않고 Pool에 반환합니다.
    객체 풀링은 클래스 인스턴스 초기화 비용이 높고 클래스 인스턴스화 속도가 높으며 한 번에 사용중인 인스턴스 수가 적은 상황에서 상당한 성능 향상을 제공 할 수 있습니다. 
    풀링 된 객체는 새 객체 생성 (특히 네트워크를 통해)에 가변 시간이 걸릴 수있는 예측 가능한 시간에 획득됩니다.
    그러나 이러한 이점은 데이터베이스 연결, 소켓 연결, 스레드 및 글꼴 또는 비트 맵과 같은 대형 그래픽 개체와 같이 시간과 관련하여 비용이 많이 드는 개체의 경우 대부분 사실입니다. 
    특정 상황에서는 단순 개체 풀링 (외부 리소스는 포함하지 않고 메모리 만 차지함)이 효율적이지 않을 수 있으며 성능이 저하 될 수 있습니다.
  * ### Prototype: 
    표준 방식 (new Foo ())으로 객체를 생성하는 비용을 피하고 대신 Prototype을 생성하고 복제합니다.
  * ### Simple Factory: 
    Simple Factory는 간단한 팩토리 패턴입니다.
    정적이 아니기 때문에 정적 팩토리와 다릅니다. 
    따라서 매개 변수가 다른 여러 팩토리를 가질 수 있으며 하위 클래스를 만들 수 있으며 모의 작업을 수행 할 수 있습니다. 
    항상 정적 팩토리보다 선호되어야합니다!
  * ### Singleton:
    **이것은 안티 패턴으로 간주됩니다! 더 나은 테스트 및 유지 관리를 위해 의존성 주입을 사용하십시오!**
    모든 호출을 처리 할 응용 프로그램에이 개체의 인스턴스가 하나만 있어야합니다.
  * ### Static Factory:
    Abstract Factory와 유사하게이 패턴은 일련의 관련 또는 종속 객체를 생성하는 데 사용됩니다.
    이 패턴과 추상 팩토리 패턴의 차이점은 정적 팩토리 패턴이 생성 할 수있는 모든 유형의 객체를 생성하기 위해 단 하나의 정적 메서드를 사용한다는 것입니다.
    일반적으로 factory 또는 build라고합니다.

* ## Structural
  소프트웨어 엔지니어링에서 Structural 디자인 패턴은 엔티티 간의 관계를 실현하는 간단한 방법을 식별하여 설계를 용이하게하는 디자인 패턴입니다.
  * ### Adapter / Wrapper:
    클래스에 대한 하나의 인터페이스를 호환 가능한 인터페이스로 변환합니다. 
    어댑터를 사용하면 원래 인터페이스를 사용하는 동안 클라이언트에 인터페이스를 제공하여 호환되지 않는 인터페이스로 인해 일반적으로 할 수 없었던 클래스가 함께 작동 할 수 있습니다.
    * Examples
      * DB Client libraries adapter
      * using multiple different webservices and adapters normalize data so that the outcome is the same for all
  * ### Bridge
    구현에서 추상화를 분리하여 둘이 독립적으로 변할 수 있도록합니다.
  * ### Composite
    개체 그룹을 개체의 단일 인스턴스와 동일한 방식으로 처리합니다.
    * Examples
      * form 클래스 인스턴스는 form의 단일 인스턴스처럼 모든 form 요소를 처리합니다. 
      render()가 호출되면 이후에 모든 하위 요소를 통해 실행되고 해당 요소에 대해 render()를 호출합니다.
  * ### Data Mapper
    데이터 매퍼는 영구 데이터 저장소(종종 관계형 데이터베이스)와 메모리 내 데이터 표현(도메인 계층)간에 데이터의 양방향 전송을 수행하는 데이터 액세스 계층입니다. 
    패턴의 목표는 메모리 내 표현과 영구 데이터 저장소를 서로 독립적으로 유지하고 데이터 매퍼 자체를 유지하는 것입니다. 
    계층은 데이터 전송을 수행하는 하나 이상의 매퍼(또는 데이터 액세스 개체)로 구성됩니다. 
    매퍼 구현은 범위가 다양합니다. 일반 매퍼는 다양한 도메인 엔터티 유형을 처리하고 전용 매퍼는 하나 또는 몇 개를 처리합니다.

    이 패턴의 핵심은 Active Record 패턴과 달리 데이터 모델이 단일 책임 원칙을 따른다는 것입니다.
    * Examples
      * DB Object Relational Mapper (ORM) : Doctrine2 uses DAO named as “EntityRepository”
  * ### Decorator
    클래스 인스턴스에 새 기능을 동적으로 추가합니다.
    * Examples
      * Web Service Layer: Decorators JSON and XML for a REST service (이 경우에는 물론 이들 중 하나만 허용되어야합니다.
  * ### Dependency Injection
    더 나은 테스트, 유지 관리 및 확장 가능한 코드를 얻기 위해 느슨하게 결합 된 아키텍처를 구현합니다.
    * Usage
      * DatabaseConfiguration이 주입되고 DatabaseConnection이 $config에서 필요한 모든 것을 가져옵니다. 
        DI가 없으면 구성이 DatabaseConnection에서 직접 생성되므로 테스트 및 확장에 적합하지 않습니다.
    * Examples
      * Doctrine2 ORM은 연결 개체에 삽입 된 구성을 위해 의존성 주입을 사용합니다.
        테스트 목적으로 쉽게 구성의 모의 객체를 만들고 Connection 객체에 삽입 할 수 있습니다.
      * 많은 프레임 워크에는 이미 구성 배열을 통해 객체를 생성하고 필요한 곳에 주입하는 DI 용 컨테이너가 있습니다 (예 : 컨트롤러)
  * ### Facade
    Facade Pattern의 주요 목표는 복잡한 API의 매뉴얼을 읽어야하는 것을 피하는 것이 아닙니다. 부작용 일뿐입니다. 
    첫번째 목표는 결합을 줄이고 데메테르의 법칙을 따르는 것입니다.

    Facade는 많은(때로는 하나만) 인터페이스를 포함하여 클라이언트와 하위 시스템을 분리하고 물론 복잡성을 줄이기위한 것입니다.

    * 파사드는 하위 시스템에 대한 액세스를 금지하지 않습니다.
    * 하나의 하위 시스템에 대해 여러 개의 파사드를 가질 수 있습니다.

    그렇기 때문에 좋은 Facade에는 새로운 것이 없습니다. 
    각 방법에 대해 여러 생성이있는 경우 Facade가 아니고 Builder 또는 [Abstract|Static|Simple] Factory [Method]입니다.

    가장 좋은 파사드는 인터페이스 유형 힌트 매개 변수가있는 새롭고 생성자가 없습니다. 새 인스턴스를 만들어야하는 경우 팩토리를 인수로 사용합니다.
  * ### Fluent Interface
    자연어 (예 : 영어)의 문장처럼 읽기 쉬운 코드를 작성합니다.
    * Examples
      * Doctrine2의 QueryBuilder는 아래 예제 클래스와 유사하게 작동합니다.
      * PHPUnit은 Fluent 인터페이스를 사용하여 모의 객체를 만듭니다.
  * ### Flyweight
    메모리 사용을 최소화하기 위해 Flyweight는 유사한 개체와 가능한 한 많은 메모리를 공유합니다. 
    상태가 크게 다르지 않은 다량의 물체를 사용할 때 필요합니다. 
    일반적인 관행은 외부 데이터 구조에 상태를 유지하고 필요할 때 플라이 웨이트 객체에 전달하는 것입니다.
  * ### Proxy
    비용이 많이 들거나 복제가 불가능한 모든 것에 인터페이스합니다.
    * Examples
      * Doctrine2는 프록시를 사용하여 프레임 워크 매직(예 : 지연 초기화)을 구현하는 반면 
        사용자는 여전히 자신의 엔티티 클래스로 작업하며 프록시를 사용하거나 만지지 않습니다.
  * ### Registry
    응용 프로그램 전체에서 자주 사용되는 객체에 대한 중앙 저장소를 구현하기 위해 일반적으로 정적 메서드 만있는 추상 클래스를 사용하거나 Singleton패턴을 사용하여 구현됩니다. 
    이것은 항상 피해야하는 글로벌 상태를 도입한다는 것을 기억하십시오! 대신 의존성 주입을 사용하여 구현하십시오!
* ## Behavioral
  소프트웨어 엔지니어링에서 행동 디자인 패턴은 객체 간의 공통 커뮤니케이션 패턴을 식별하고 이러한 패턴을 실현하는 디자인 패턴입니다. 
  이렇게함으로써 이러한 패턴은 이러한 커뮤니케이션을 수행하는 데있어 유연성을 증가시킵니다.
  * ### Chain Of Responsibilities
    순차적으로 호출을 처리하기 위해 개체 체인을 구축합니다. 
    한 개체가 호출을 처리 할 수 없으면 호출을 체인의 다음 개체에 위임합니다.
    * Examples
      * 각 체인 요소가 로그 메시지로 수행 할 작업을 자율적으로 결정하는 로깅 프레임워크
      * 스팸 필터
      * 캐싱 : 첫 번째 개체는 인스턴스입니다. Memcached 인터페이스 예들 들면, "누락 된"경우 데이터베이스 인터페이스에 호출을 위임합니다.
  * ### Command
    호출과 디커플링을 캡슐화합니다.

    Invoker와 Receiver가 있습니다. 이 패턴은 "Command"를 사용하여 수신자에 대한 메서드 호출을 위임하고 동일한 메서드 "execute"를 제공합니다. 
    따라서 Invoker는 클라이언트의 명령을 처리하기 위해 "execute"를 호출하는 것만 알고 있습니다. 리시버는 호출자에서 분리됩니다.

    이 패턴의 두 번째 측면은 execute()메서드를 실행 취소하는 undo()입니다. 
    명령을 집계하여 더 복잡한 명령을 최소한의 복사-붙여 넣기로 결합하고 상속보다 합성에 의존 할 수도 있습니다.
    * Examples
      * 텍스트 편집기 : 모든 이벤트는 실행 취소, 스택 및 저장할 수있는 명령입니다.
      * 큰 CLI 도구는 하위 명령을 사용하여 다양한 작업을 배포하고 "모듈"로 압축합니다. 
        이들 각각은 명령 패턴으로 구현할 수 있습니다.(예: vagrant)