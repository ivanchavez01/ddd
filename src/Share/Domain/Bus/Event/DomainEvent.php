<?php
declare(strict_types=1);

namespace IcDevz\Ddd\Share\Domain\Bus\Event;

use IcDevz\Ddd\Share\Domain\ValueObject\Uuid;

abstract class DomainEvent
{
    private string $eventId;
    private string $occurredOn;

    public function __construct(private string $aggregateId, string $eventId = null, string $occurredOn = null)
    {
        $this->eventId    = $eventId ?: Uuid::random()->value();
        $date = new \DateTimeImmutable();
        $this->occurredOn = $occurredOn ?: $date->format(\DateTimeInterface::ATOM);
    }

    abstract public static function fromPrimitives(
        string $aggregateId,
        array $body,
        string $eventId,
        string $occurredOn
    ): self;

    abstract public static function eventName(): string;

    abstract public function toPrimitives(): array;

    public function aggregateId(): string
    {
        return $this->aggregateId;
    }

    public function eventId(): string
    {
        return $this->eventId;
    }

    public function occurredOn(): string
    {
        return $this->occurredOn;
    }
}