<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Note: 방문자는 호출 할 메소드를 스스로 선택해서는 안됩니다.
 * 이 결정을 내리는 것은 방문한 객체입니다.
 */
interface RoleVisitor
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}