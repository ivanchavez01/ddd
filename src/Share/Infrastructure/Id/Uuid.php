<?php
declare(strict_types=1);

namespace IcDevz\Ddd\Share\Infrastructure\Id;

use IcDevz\Ddd\Share\Domain\Id\Id;

class Uuid extends Id
{
    public function __construct(
        ?string $id
    )
    {
        parent::__construct($id);
    }
}