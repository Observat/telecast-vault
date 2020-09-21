<?php


namespace Observatby\TelecastVault\Dto;

class ViewTelecastWithEpisodesDTO
{
    public string $title;
    public string $shortDescription;
    public string $description;
    /** @var SmallViewLeaderListDTO[] $leaders */
    public array $leaders;
    /** @var SmallViewEpisodeListDTO[] $episodes */
    public array $episodes;
}
