<?php


namespace Observatby\TelecastVault\Dto;

class ViewTelecastWithEpisodesDTO
{
    public string $title;
    public string $description;
    public string $text;
    /** @var SmallViewLeaderListDTO[] $leaders */
    public array $leaders;
    /** @var SmallViewEpisodeListDTO[] $episodes */
    public array $episodes;
}
