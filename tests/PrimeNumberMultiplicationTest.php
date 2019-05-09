<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use src\PrimeNumberMultiplication;

class PrimeNumberMultiplicationTest extends TestCase {

	public function testGenerateTable() {
		// Create a stub for the SomeClass class.
		$stub = $this->getMockBuilder( PrimeNumberMultiplication::class )
			->disableOriginalConstructor()
			->disableOriginalClone()
			->disableArgumentCloning()
			->disallowMockingUnknownTypes()
			->getMock();

		// Configure the stub.
		$stub->method( 'generateTable' )
			->willReturn( 'This is Output' );

		$this->assertSame( 'This is Output', $stub->generateTable() );
	}

}
