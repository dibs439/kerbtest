<?php
namespace Tests\Integration;

use Tests\TestCase;
use App\Calculator\Calculator;

class CalcTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        
    }
    
    public function test_hit_endpoint_and_check_response()
    {
        
        $numbers = [
            1,2,6,10,7
        ];
        
        $this->json('POST', 'api/v1/test-result', $numbers)
        ->assertStatus(200)
        ->assertJsonStructure([
            "total"
        ]);
    }
}