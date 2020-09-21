<?php


namespace Observatby\TelecastVault\TransformToDto\Traits;


use Observatby\TelecastVault\Dto\SmallViewLeaderListDTO;

trait FillBaseOfTelecast
{
    private static function fillBaseOfTelecast($model, $dto)
    {
        $dto->title = $model->getTitle();
        $dto->shortDescription = $model->getShortDescription();
        $dto->description = $model->getDescription();

        $leaders = $model->getLeaders();
        $leadersDto = [];
        foreach ($leaders as $leader) {
            $leaderDto = new SmallViewLeaderListDTO();
            $leaderDto->title = $leader->getTitle();
            $leaderDto->quote = $leader->getQuote();
            $leaderDto->description = $leader->getShortDescription();
            $leadersDto[] = $leaderDto;
        }
        $dto->leaders = $leadersDto;

        return $dto;
    }
}
