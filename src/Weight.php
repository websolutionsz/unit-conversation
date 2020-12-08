<?php

namespace Websolutionsz\UnitConversation;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $killograms)
    {
        $this->kilograms = $killograms;
    }
    
    public function toLbs() : float
    {
        # code...
        return $this->kilograms * 2.204623;
    }
}
