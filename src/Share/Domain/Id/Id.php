<?php
declare(strict_types=1);

namespace IcDevz\Ddd\Share\Domain\Id;

abstract class Id
{
    public function __construct(
        private string|int|null $id
    ) {
    }

    /**
     * @return string|int|null
     */
    public function raw(): string|int|null
    {
        return $this->id;
    }
}