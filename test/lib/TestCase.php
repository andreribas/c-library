<?php

namespace Tests;

use AndreRibas\Clibrary\App\RouterForTests;
use AndreRibas\Clibrary\App\Service;
use PHPUnit\Framework\TestCase as PhpunitTestCase;

class TestCase extends PhpunitTestCase
{
    protected function setUp(): void
    {
        define('ENV', 'test');
        include(dirname(__FILE__) . '/../../config/setup.php');

        parent::setUp();

        RouterForTests::reset();
        Service::get('renderer')->reset();
        Service::get('db')->beginTransaction();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        Service::get('db')->rollBack();
    }
}