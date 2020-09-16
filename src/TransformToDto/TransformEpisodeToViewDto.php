<?php


namespace Observatby\TelecastVault\TransformToDto;


use Observatby\TelecastVault\Dto\ViewEpisodeDTO;
use Observatby\TelecastVault\Models\Episode;


class TransformEpisodeToViewDto
{
    /**
     * @param Episode $model
     * @return ViewEpisodeDTO
     */
    public static function transform(Episode $model): ViewEpisodeDTO
    {
        $dto = new ViewEpisodeDTO();

        $dto->title = $model->getTitle();
        $dto->description = $model->getDescription();
        $dto->text = $model->getText();
        $dto->ageRestriction = $model->getAgeRestriction();
        $dto->videoUrl = $model->getVideo()->getUrl();

        return $dto;
    }
}
