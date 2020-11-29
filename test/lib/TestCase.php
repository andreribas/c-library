<?php

namespace Tests;

use AndreRibas\Clibrary\App\RouterForTests;
use AndreRibas\Clibrary\App\Service;
use AndreRibas\Clibrary\Facade\DB;
use AndreRibas\Clibrary\Facade\Renderer;
use PHPUnit\Framework\TestCase as PhpunitTestCase;

class TestCase extends PhpunitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        RouterForTests::reset();
        Renderer::get()->reset();
        DB::get()->beginTransaction();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        DB::get()->rollBack();
    }
}