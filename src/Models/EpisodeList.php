<?php


namespace Observatby\TelecastVault\Models;


class EpisodeList
{
    private array $episodes;

    /**
     * EpisodeList constructor.
     * @param array $episodes
     */
    public function __construct(array $episodes)
    {
        $this->episodes = $episodes;
    }
}
