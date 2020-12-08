<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Adapter;

/**
 * 이것은 어댑터입니다. Book을 구현하고 있습니다.
 * 따라서 책을 사용하는 클라이언트의 코드를 변경할 필요가 없습니다.
 */
class EBookAdapter implements Book
{
    protected $eBook;

    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * 이 클래스는 한 인터페이스에서 다른 인터페이스로 적절히 변환합니다.
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * 여기서 조정 된 동작을 확인하십시오. 
     * EBook::getPage()는 두 개의 정수를 반환하지만 
     * Book은 현재 페이지 getter 만 지원하므로 여기서 동작을 조정합니다.
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}