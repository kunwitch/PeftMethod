<?php
/**
 * Tests for PeftMethod
 */

use PHPUnit\Framework\TestCase;
use Peftmethod\Peftmethod;

class PeftmethodTest extends TestCase {
    private Peftmethod $instance;

    protected function setUp(): void {
        $this->instance = new Peftmethod(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peftmethod::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
