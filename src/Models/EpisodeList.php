<?php


namespace Observatby\TelecastVault\Models;


use ArrayIterator;

class EpisodeList implements EpisodeListInterface
{
    /** @var Episode[] $episodes */
    private array $episodes;

    /**
     * EpisodeList constructor.
     * @param Episode[] $episodes
     */
    public function __construct(array $episodes)
    {
        $this->episodes = $episodes;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->episodes);
    }
}
