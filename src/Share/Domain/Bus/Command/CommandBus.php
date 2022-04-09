<?php
declare(strict_types=1);

namespace IcDevz\Ddd\Share\Domain\Bus\Command;

interface CommandBus
{
    public function dispatch(Command $command): void;
}