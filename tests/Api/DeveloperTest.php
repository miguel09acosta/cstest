<?php

namespace App\Tests\Api;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;
use App\Service\DeveloperService;

class DeveloperTest extends ApiTestCase
{
    public function testCreateDeveloper(): void
    {
        $devService = new DeveloperService();
        $this->assertEquals('application/json', $devService->getHeaders()['accept']);
        static::createClient()->request('POST', '/developers', [
            'json' => $devService->getDataPost(),
            'headers' => $devService->getHeaders()
        ]);

        $this->assertResponseStatusCodeSame(201);
        $this->assertJsonContains([
            "skills" => [
                "symfony",
                "vue",
                "oracle"
            ]
        ]);
    }
}
