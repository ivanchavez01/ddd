<?php

namespace IcDevz\Ddd\Share\Domain\Bus\Event;

interface EventBus
{
    public function publish(DomainEvent ...$events): void;
}