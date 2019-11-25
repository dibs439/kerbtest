<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Calculator\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    

    public function testAddNUmbers()
    {

        $numbers = [
            1,2,6,10,7
        ];

        Calculator::add($numbers);

        $this->assertEquals(Calculator::add($numbers), 26);

    }
}
