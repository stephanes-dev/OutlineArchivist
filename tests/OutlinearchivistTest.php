<?php
/**
 * Tests for OutlineArchivist
 */

use PHPUnit\Framework\TestCase;
use Outlinearchivist\Outlinearchivist;

class OutlinearchivistTest extends TestCase {
    private Outlinearchivist $instance;

    protected function setUp(): void {
        $this->instance = new Outlinearchivist(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinearchivist::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
