<?php


namespace Observatby\TelecastVault\TransformToDto;


use Observatby\TelecastVault\Dto\ViewTelecastDTO;
use Observatby\TelecastVault\Models\Telecast;


class TransformTelecastToViewDto
{
    public static function transform(Telecast $model): ViewTelecastDTO
    {
        $dto = new ViewTelecastDTO();

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
