<?php declare(strict_types = 1);

namespace DesignPatterns\Behavioral\Visitor;

class RecordingVisitor implements RoleVisitor
{
    /**
     * @var Role[]
     */
    private $visited = [];

    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getvisited(): array
    {
        return $this->visited;
    }
}