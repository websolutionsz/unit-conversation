<?php

namespace Websolutionsz\UnitConversation\Tests;

use PHPUnit\Framework\TestCase;
use Websolutionsz\UnitConversation\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function is_convert_kg_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
