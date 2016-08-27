<?php

use Aedart\Testing\TestCases\Unit\UnitTestCase;

/**
 * UnitTestCaseTest
 *
 * @group testcases
 * @group testcases-unit
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class UnitTestCaseTest extends UnitTestCase
{
    /**
     * @test
     */
    public function itWorks()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function hasFakerInstance()
    {
        $this->assertNotNull($this->faker);
    }
}