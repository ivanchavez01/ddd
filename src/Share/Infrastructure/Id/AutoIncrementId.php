<?php
declare(strict_types=1);

namespace IcDevz\Ddd\Share\Infrastructure\Id;

use IcDevz\Ddd\Share\Domain\Id\Id;

class AutoIncrementId extends Id
{
    public function __construct(
        ?int $id
    ) {
        parent::__construct($id);
    }
}