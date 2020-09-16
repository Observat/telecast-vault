<?php


namespace Observatby\TelecastVault\Models;


class Video
{
    private string $url;
    // TODO copyright_link
    // TODO copyright_text

    /**
     * Video constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
