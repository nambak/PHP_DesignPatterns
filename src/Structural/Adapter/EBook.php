<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Adapter;

interface EBook
{
    public function unlock();

    public function pressNext();

    /**
     * 현재 페이지와 총 페이지 수를 반환합니다. 
     * 예를 들어 [10, 100]은 10/100 페이지입니다.
     * 
     * @return int[]
     */
    public function getPage(): array;
}