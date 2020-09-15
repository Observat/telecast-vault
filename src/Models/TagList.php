<?php


namespace Observatby\TelecastVault\Models;


class TagList
{
    private array $tags;

    /**
     * TagList constructor.
     * @param array $tags
     */
    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }
}
