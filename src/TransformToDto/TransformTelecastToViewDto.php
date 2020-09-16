<?php


namespace Observatby\TelecastVault\TransformToDto;


use Observatby\TelecastVault\Dto\ViewTelecastDTO;
use Observatby\TelecastVault\Models\Telecast;
use Observatby\TelecastVault\TransformToDto\Traits\FillBaseOfTelecast;


class TransformTelecastToViewDto
{
    use FillBaseOfTelecast;

    public static function transform(Telecast $model): ViewTelecastDTO
    {
        return self::fillBaseOfTelecast($model, new ViewTelecastDTO());
    }
}
