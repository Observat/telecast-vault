<?php declare(strict_types=1);

use Observatby\TelecastVault\Dto\SmallViewEpisodeListDTO;
use Observatby\TelecastVault\Dto\SmallViewLeaderListDTO;
use Observatby\TelecastVault\Dto\ViewEpisodeDTO;
use Observatby\TelecastVault\Dto\ViewTelecastDTO;
use Observatby\TelecastVault\Dto\ViewTelecastWithEpisodesDTO;
use Observatby\TelecastVault\TransformToDto\TransformEpisodeToViewDto;
use Observatby\TelecastVault\TransformToDto\TransformTelecastToViewDto;
use Observatby\TelecastVault\TransformToDto\TransformTelecastWithEpisodesToViewDto;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/CreateModelsTrait.php';

final class CreateDtoTest extends TestCase
{
    use CreateModelsTrait;

    public function testEpisodeDtoFromModel()
    {
        $expectedDto = new ViewEpisodeDTO();
        $expectedDto->title = "«Вместе» от 30 августа 2020";
        $expectedDto->description = "";
        $expectedDto->text = $this->createEpisodeText_1_1();
        $expectedDto->ageRestriction = "16+";
        $expectedDto->videoUrl = "http://mirtv.ru/files/video/66862/video.mp4";

        $model = $this->createEpisode_1_1();

        $actualDto = TransformEpisodeToViewDto::transform($model);

        $this->assertEquals($expectedDto, $actualDto);
    }

    public function testTelecastDtoFromModel()
    {
        $expectedDto = new ViewTelecastDTO();
        $expectedDto->title = "Вместе";
        $expectedDto->shortDescription = "Все самое главное за неделю.";
        $expectedDto->description = "Все самое главное за неделю.";
        $expectedLeaderDto = new SmallViewLeaderListDTO();
        $expectedLeaderDto->title = "Екатерина Абрамова";
        $expectedLeaderDto->quote = "Хобби - большой теннис, кулинария";
        $expectedLeaderDto->description = 'Зам. председателя МТРК «МИР», директор телеканала «МИР», ведущая программы <a href="http://mirtv.ru/broadcast/68/">«Вместе»</a>.';
        $expectedDto->leaders = [ $expectedLeaderDto ];

        $model = $this->createTelecast_1();

        $actualDto = TransformTelecastToViewDto::transform($model);

        $this->assertEquals($expectedDto, $actualDto);
    }

    public function testTelecastWithEpisodesDtoFromModel()
    {
        $expectedDto = new ViewTelecastWithEpisodesDTO();
        $expectedDto->title = "Вместе";
        $expectedDto->shortDescription = "Все самое главное за неделю.";
        $expectedDto->description = "Все самое главное за неделю.";
        $expectedLeaderDto = new SmallViewLeaderListDTO();
        $expectedLeaderDto->title = "Екатерина Абрамова";
        $expectedLeaderDto->quote = "Хобби - большой теннис, кулинария";
        $expectedLeaderDto->description = 'Зам. председателя МТРК «МИР», директор телеканала «МИР», ведущая программы <a href="http://mirtv.ru/broadcast/68/">«Вместе»</a>.';
        $expectedDto->leaders = [ $expectedLeaderDto ];
        $expectedDto->episodes = [
            new SmallViewEpisodeListDTO("«Вместе» от 30 августа 2020"),
            new SmallViewEpisodeListDTO("«Вместе» от 13 сентября 2020"),
        ];

        $model = $this->createTelecast_1();

        $actualDto = TransformTelecastWithEpisodesToViewDto::transform($model);

        $this->assertEquals($expectedDto, $actualDto);

        $secondEpisodeTitle = ($actualDto->episodes)[1]->title;
        $this->assertEquals("«Вместе» от 13 сентября 2020", $secondEpisodeTitle);
    }
}
