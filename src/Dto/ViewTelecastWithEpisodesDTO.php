<?php


namespace Observatby\TelecastVault\Dto;

class ViewTelecastWithEpisodesDTO
{
    public string $title;
    public string $shortDescription;
    public string $description;
    public string $leaderTitle;
    public string $leaderQuote;
    public string $leaderShortDescription;
    /** @var SmallViewEpisodeListDTO[] $episodes */
    public array $episodes;
}
