<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/CreateModelsTrait.php';

final class CreateDtoTest extends TestCase
{
    use CreateModelsTrait;

    public function testEpisodeDtoFromModel()
    {
        $expectedDto = new \Observatby\TelecastVault\Dto\ViewEpisodeDTO();
        $expectedDto->title = "«Вместе» от 30 августа 2020";
        $expectedDto->description = "";
        $expectedDto->text = $this->createEpisodeText_1_1();
        $expectedDto->ageRestriction = "16+";
        $expectedDto->videoUrl = "http://mirtv.ru/files/video/66862/video.mp4";

        $model = $this->createEpisode_1_1();

        $actualDto = \Observatby\TelecastVault\TransformToDto\TransformEpisodeToViewDto::transform($model);

        $this->assertEquals($expectedDto, $actualDto);
    }

    public function testTelecastDtoFromModel()
    {
        $expectedDto = new \Observatby\TelecastVault\Dto\ViewTelecastDTO();
        $expectedDto->title = "Вместе";
        $expectedDto->shortDescription = "Все самое главное за неделю.";
        $expectedDto->description = "Все самое главное за неделю.";
        $expectedDto->leaderTitle = "Екатерина Абрамова";
        $expectedDto->leaderQuote = "Хобби - большой теннис, кулинария";
        $expectedDto->leaderShortDescription = 'Зам. председателя МТРК «МИР», директор телеканала «МИР», ведущая программы <a href="http://mirtv.ru/broadcast/68/">«Вместе»</a>.';

        $model = $this->createTelecast_1();

        $actualDto = \Observatby\TelecastVault\TransformToDto\TransformTelecastToViewDto::transform($model);

        $this->assertEquals($expectedDto, $actualDto);
    }

    public function testTelecastWithEpisodesDtoFromModel()
    {
        $expectedDto = new \Observatby\TelecastVault\Dto\ViewTelecastWithEpisodesDTO();
        $expectedDto->title = "Вместе";
        $expectedDto->shortDescription = "Все самое главное за неделю.";
        $expectedDto->description = "Все самое главное за неделю.";
        $expectedDto->leaderTitle = "Екатерина Абрамова";
        $expectedDto->leaderQuote = "Хобби - большой теннис, кулинария";
        $expectedDto->leaderShortDescription = 'Зам. председателя МТРК «МИР», директор телеканала «МИР», ведущая программы <a href="http://mirtv.ru/broadcast/68/">«Вместе»</a>.';
        $expectedDto->episodes = [
            new \Observatby\TelecastVault\Dto\SmallViewEpisodeListDTO("«Вместе» от 30 августа 2020"),
            new \Observatby\TelecastVault\Dto\SmallViewEpisodeListDTO("«Вместе» от 13 сентября 2020"),
        ];

        $model = $this->createTelecast_1();

        $actualDto = \Observatby\TelecastVault\TransformToDto\TransformTelecastWithEpisodesToViewDto::transform($model);

        $this->assertEquals($expectedDto, $actualDto);

        $secondEpisodeTitle = ($actualDto->episodes)[1]->title;
        $this->assertEquals("«Вместе» от 13 сентября 2020", $secondEpisodeTitle);
    }
}
