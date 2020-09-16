<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/CreateModelsTrait.php';

final class CreateModelsTest extends TestCase
{
    use CreateModelsTrait;

    public function testCreateTelecastList()
    {
        $telecastList = new \Observatby\TelecastVault\Models\TelecastList([
            $this->createTelecast_1()
        ]);

        $this->assertInstanceOf(\Observatby\TelecastVault\Models\TelecastList::class, $telecastList);
    }
}
