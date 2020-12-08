<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Adapter;

/**
 * 이것은 adapted된 클래스입니다. 
 * 프로덕션 코드에서 이것은 다른 패키지의 클래스, 일부 공급 업체 코드 일 수 있습니다.
 * 다른 이름 지정 체계를 사용하고 구현이 유사한 작업을 수행하지만 다른 방식으로 여기에 적용된 동작에 유의하십시오. 
 * EBook::getPage()는 두 개의 정수를 반환하지만 Book은 현재 페이지 getter 만 지원하므로 여기서 동작을 조정합니다.
 */
class Kindle implements EBook
{
    private $page = 1;
    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
        //
    }

    /**
     * 현재 페이지와 총 페이지 수를 반환합니다. 
     * 예를 들어 [10, 100]은 10/100 페이지입니다.
     * 
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}