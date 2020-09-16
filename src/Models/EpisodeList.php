<?php


namespace Observatby\TelecastVault\Models;


class EpisodeList
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
}
