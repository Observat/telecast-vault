<?php


namespace Observatby\TelecastVault\TransformToDto\Traits;


use Observatby\TelecastVault\Dto\SmallViewLeaderListDTO;

trait FillBaseOfTelecast
{
    private static function fillBaseOfTelecast($model, $dto)
    {
        $dto->title = $model->getTitle();
        $dto->description = $model->getDescription();
        $dto->text = $model->getText();

        $leaders = $model->getLeaders();
        $leadersDto = [];
        foreach ($leaders as $leader) {
            $leaderDto = new SmallViewLeaderListDTO();
            $leaderDto->title = $leader->getTitle();
            $leaderDto->quote = $leader->getQuote();
            $leaderDto->description = $leader->getDescription();
            $leadersDto[] = $leaderDto;
        }
        $dto->leaders = $leadersDto;

        return $dto;
    }
}
