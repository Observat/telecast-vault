<?php


namespace Observatby\TelecastVault\Dto;

class ViewTelecastDTO
{
    public string $title;
    public string $shortDescription;
    public string $description;
    /** @var SmallViewLeaderListDTO[] $leaders */
    public array $leaders;
}
