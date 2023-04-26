<?php

class Mathtest extends PHPUnit\Framework\TestCase
{

    public function testDouble(){

       $this->assertEquals(4, \Imboyo\Math::double(2));
    }

}