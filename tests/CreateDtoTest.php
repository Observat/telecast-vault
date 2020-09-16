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
}
