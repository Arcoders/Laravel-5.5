<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Rules\RealText;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RealTextRuleTest extends TestCase
{
    /**
     * @test
     */
    public function it_prevents_bios_with_lorem_ipsum()
    {
        $rule = new RealText();

        $this->assertTrue($rule->passes('foo', 'Programador de Laravel'));

        $this->assertFalse($rule->passes('foo', 'Random text lorem ipsum'));
    }

}
