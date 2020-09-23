<?php


namespace Observatby\TelecastVault\Models;


use ArrayIterator;

class LeaderList implements LeaderListInterface
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
