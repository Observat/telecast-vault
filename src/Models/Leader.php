<?php


namespace Observatby\TelecastVault\Models;


class Leader
{
    private string $title;
    private string $quote;
    private string $description;
    private string $text;

    /**
     * Leader constructor.
     * @param string $title
     * @param string $quote
     * @param string $description
     * @param string $text
     */
    public function __construct(string $title, string $quote, string $description, string $text)
    {
        $this->title = $title;
        $this->quote = $quote;
        $this->description = $description;
        $this->text = $text;
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
    public function getDescription(): string
    {
        return $this->description;
    }
}
