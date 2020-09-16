<?php


namespace Observatby\TelecastVault\Models;


class TelecastList
{
    /** @var Telecast[] $telecasts */
    private array $telecasts;

    /**
     * TelecastList constructor.
     * @param Telecast[] $telecasts
     */
    public function __construct(array $telecasts)
    {
        $this->telecasts = $telecasts;
    }
}
