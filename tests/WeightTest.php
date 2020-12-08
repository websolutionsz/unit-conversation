<?php

namespace Websolutionsz\UnitConversation\Tests;

use Websolutionsz\UnitConversation\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function is_convert_kg_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
