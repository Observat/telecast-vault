<?php


namespace Observatby\TelecastVault\Models;


class Photo
{
    private string $title;
    private string $url;

    /**
     * Photo constructor.
     * @param string $title
     * @param string $url
     */
    public function __construct(string $title, string $url)
    {
        $this->title = $title;
        $this->url = $url;
    }
}
