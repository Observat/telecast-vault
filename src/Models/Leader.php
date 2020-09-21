<?php


namespace Observatby\TelecastVault\Models;


class Leader
{
    private string $title;
    private string $quote;
    private string $shortDescription;
    private string $description;

    /**
     * Leader constructor.
     * @param string $title
     * @param string $quote
     * @param string $shortDescription
     * @param string $description
     */
    public function __construct(string $title, string $quote, string $shortDescription, string $description)
    {
        $this->title = $title;
        $this->quote = $quote;
        $this->shortDescription = $shortDescription;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getQuote(): string
    {
        return $this->quote;
    }

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
}
