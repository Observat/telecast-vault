<?php


namespace Observatby\TelecastVault\Models;


class TagList
{
    /** @var Tag[] $tags */
    private array $tags;

    /**
     * TagList constructor.
     * @param Tag[] $tags
     */
    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }
}
