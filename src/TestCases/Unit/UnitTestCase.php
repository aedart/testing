<?php
namespace Aedart\Testing\TestCases\Unit;

use Codeception\TestCase\Test;
use Faker\Factory;
use \Mockery as m;

/**
 * Unit TestCase
 *
 * Base test-case for codeception unit tests.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Testing\TestCases\Unit
 */
abstract class UnitTestCase extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \Faker\Generator
     */
    protected $faker = null;

    protected function _before()
    {
        $this->faker = Factory::create();
    }

    protected function _after()
    {
        m::close();
    }

    /***********************************************************
     * Helpers and utilities
     **********************************************************/
}