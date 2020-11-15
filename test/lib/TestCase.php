<?php

namespace Tests;

use AndreRibas\Clibrary\App\RouterForTests;
use AndreRibas\Clibrary\Repository\DB;
use PHPUnit\Framework\TestCase as PhpunitTestCase;

class TestCase extends PhpunitTestCase
{
    protected function setUp(): void
    {
        define('ENV', 'test');
        include(dirname(__FILE__) . '/../../config/setup.php');

        parent::setUp();

        DB::getDB()->beginTransaction();
        RouterForTests::reset();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        DB::getDB()->rollBack();
    }
}