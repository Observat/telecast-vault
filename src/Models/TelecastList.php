<?php


namespace Observatby\TelecastVault\Models;


class TelecastList
{
    private array $telecasts;

    /**
     * TelecastList constructor.
     * @param array $telecasts
     */
    public function __construct(array $telecasts)
    {
        $this->telecasts = $telecasts;
    }
}
