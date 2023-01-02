<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

final class SetUpTest extends TestCase
{
    private $array;

    protected function setUp(): void
    {
        $this->array = [];
    }

    public function testEmpty(): void
    {
        $this->assertTrue(empty($this->array));
    }

    public function testPush(): void
    {
        array_push($this->array, 'foo');

        $this->assertSame('foo', $this->array[count($this->array)-1]);
        $this->assertFalse(empty($this->array));
    }

    public function testPop(): void
    {
        array_push($this->array, 'foo');

        $this->assertSame('foo', array_pop($this->array));
        $this->assertTrue(empty($this->array));
    }
}
