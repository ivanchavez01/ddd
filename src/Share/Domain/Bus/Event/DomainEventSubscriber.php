<?php

namespace IcDevz\Ddd\Share\Domain\Bus\Event;

interface DomainEventSubscriber
{
    public static function subscribedTo(): array;
}