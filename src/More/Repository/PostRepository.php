<?php declare(strict_types = 1);

namespace DesignPatterns\More\Repository;

use DesignPatterns\More\Repository\Domain\Post;
use DesignPatterns\More\Repository\Domain\PostId;
use OutOfBoundsException;

/**
 * 이 클래스는 Entity 계층 (클래스 Post)과 액세스 개체 계층 (Persistence) 사이에 있습니다.
 *
 * 리포지토리는 데이터 저장소에 유지되는 개체 집합과 개체에 대해 수행되는 작업을 캡슐화하여 
 * 지속성 계층에 대한 보다 개체 지향적인 보기를 제공합니다.
 *
 * 리포지토리는 또한 도메인과 데이터 매핑 계층간에 명확한 분리 및 단방향 종속성을 달성하려는 목표를 지원합니다.
 */
class PostRepository
{
    private $persistence;

    public function __construct(Persistence $persistence)
    {
        $this->persistence = $persistence;
    }

    public function generateId(): PostId
    {
        return PostId::fromInt($this->persistence->generateId());
    }

    public function findById(PostId $id): Post
    {
        try {
            $arrayData = $this->persistence->retrieve($id->toInt());
        } catch (OutOfBoundsException $e) {
            throw new OutOfBoundsException(sprintf('Post with id %d does not exist', $id->toInt()), 0, $e);
        }

        return Post::fromState($arrayData);
    }

    public function save(Post $post)
    {
        $this->persistence->persist([
            'id' => $post->getId()->toInt(),
            'statusId' => $post->getStatus()->toInt(),
            'text' => $post->getText(),
            'title' => $post->getTitle(),
        ]);
    }
}