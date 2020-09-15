<?php


namespace Observatby\TelecastVault\Models;


class Leader
{
    private string $title;
    private string $blockquote;
    private string $shortDescription;
    private string $description;

    /**
     * Leader constructor.
     * @param string $title
     * @param string $blockquote
     * @param string $shortDescription
     * @param string $description
     */
    public function __construct(string $title, string $blockquote, string $shortDescription, string $description)
    {
        $this->title = $title;
        $this->blockquote = $blockquote;
        $this->shortDescription = $shortDescription;
        $this->description = $description;
    }
}
