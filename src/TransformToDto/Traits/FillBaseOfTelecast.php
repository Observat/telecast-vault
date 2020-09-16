<?php


namespace Observatby\TelecastVault\TransformToDto\Traits;


trait FillBaseOfTelecast
{
    private static function fillBaseOfTelecast($model, $dto)
    {
        $dto->title = $model->getTitle();
        $dto->shortDescription = $model->getShortDescription();
        $dto->description = $model->getDescription();

        $leader = $model->getLeader();
        $dto->leaderTitle = $leader->getTitle();
        $dto->leaderBlockquote = $leader->getBlockquote();
        $dto->leaderShortDescription = $leader->getShortDescription();

        return $dto;
    }
}