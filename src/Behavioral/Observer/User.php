<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Observer;

use SplSubject;
use SplObjectStorage;
use SplObserver;

/**
 * User는 관찰할 객체 (Subject라고 함)를 구현하고 
 * 관찰자 목록을 유지하고 User 객체가 변경된 경우 관찰자에게 알림을 보냅니다.
 */
class User implements SplSubject
{
    private $observers;
    private $email;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }

    public function notify()
    {
        /** @var SplObserver $observer */
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }
}