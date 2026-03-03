<?php
/**
 * Tests for TrainFlux
 */

use PHPUnit\Framework\TestCase;
use Trainflux\Trainflux;

class TrainfluxTest extends TestCase {
    private Trainflux $instance;

    protected function setUp(): void {
        $this->instance = new Trainflux(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trainflux::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
