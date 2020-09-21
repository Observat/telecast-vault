<?php


namespace Observatby\TelecastVault\Dto;

class ViewTelecastDTO
{
    public string $title;
    public string $description;
    public string $text;
    /** @var SmallViewLeaderListDTO[] $leaders */
    public array $leaders;
}
