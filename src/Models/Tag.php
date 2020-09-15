<?php


namespace Observatby\TelecastVault\Models;


class Tag
{
    private string $title;

    /**
     * Tag constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
