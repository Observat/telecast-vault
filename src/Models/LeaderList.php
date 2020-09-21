<?php


namespace Observatby\TelecastVault\Models;


use ArrayIterator;
use IteratorAggregate;

class LeaderList implements IteratorAggregate, LeaderListInterface
{
    /** @var Leader[] $leaders */
    private array $leaders;

    /**
     * LeaderList constructor.
     * @param Leader[] $leaders
     */
    public function __construct(array $leaders)
    {
        $this->leaders = $leaders;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->leaders);
    }
}
