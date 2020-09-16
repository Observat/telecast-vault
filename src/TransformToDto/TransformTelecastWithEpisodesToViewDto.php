<?php


namespace Observatby\TelecastVault\TransformToDto;


use Observatby\TelecastVault\Dto\SmallViewEpisodeListDTO;
use Observatby\TelecastVault\Dto\ViewTelecastWithEpisodesDTO;
use Observatby\TelecastVault\Models\Telecast;
use Observatby\TelecastVault\TransformToDto\Traits\FillBaseOfTelecast;


class TransformTelecastWithEpisodesToViewDto
{
    use FillBaseOfTelecast;

    public static function transform(Telecast $model): ViewTelecastWithEpisodesDTO
    {
        /** @var ViewTelecastWithEpisodesDTO $dto */
        $dto = self::fillBaseOfTelecast($model, new ViewTelecastWithEpisodesDTO());

        $episodesDto = [];
        $episodes = $model->getEpisodes();
        foreach ($episodes as $episode) {
            $episodesDto[] = new SmallViewEpisodeListDTO($episode->getTitle());
        }

        $dto->episodes = $episodesDto;

        return $dto;
    }
}
