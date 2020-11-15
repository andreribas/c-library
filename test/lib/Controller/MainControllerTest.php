<?php

namespace Tests\Controller;

use AndreRibas\Clibrary\Controller\MainController;
use AndreRibas\Clibrary\Model\Header;
use AndreRibas\Clibrary\Model\HeaderCreator;
use AndreRibas\Clibrary\Repository\HeaderRepository;
use Tests\TestCase;

class MainControllerTest extends TestCase
{
    public function testIndexActionWithoutHeaders()
    {
        $response = MainController::index();

        $expected_params = [
            'title' => 'Headers',
            'headers' => [],
        ];

        $this->assertEquals('index.php', $response->getTemplatePath());
        $this->assertEquals($expected_params, $response->getParams());
    }

    public function testIndexActionWithHeaders()
    {
        $headers = [
            HeaderCreator::create('stdio.h', 'Standard Input/Output Library'),
            HeaderCreator::create('math.h', 'Math Library'),
        ];

        $response = MainController::index();

        $expected_params = [
            'title' => 'Headers',
            'headers' => $headers,
        ];
        $this->assertEquals('index.php', $response->getTemplatePath());
        $this->assertEquals($expected_params, $response->getParams());
    }
}