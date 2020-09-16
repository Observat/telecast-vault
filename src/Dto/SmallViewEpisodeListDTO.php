<?php


namespace Observatby\TelecastVault\Dto;

class SmallViewEpisodeListDTO
{
    public string $title;

    /**
     * SmallViewEpisodeListDTO constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
