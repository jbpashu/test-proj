<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use src\PrimeNumberMultiplication;

class PrimeNumberMultiplicationTest extends TestCase {

	/**
	 * @var  null
	 */
	protected $objPrimeNumberMultiplication;

	/**
	 * @var  int
	 */
	protected $primeNumberCount = 10;

	/**
	 * @before
	 */
	public function beforeTests() {
		$this->objPrimeNumberMultiplication = new PrimeNumberMultiplication( $this->primeNumberCount );
	}

	public function afterTests() {
		unset( $this->objPrimeNumberMultiplication );
	}

	public function testGenerateTable() {
//		// Create a stub for the SomeClass class.
//		$stub = $this->getMockBuilder( PrimeNumberMultiplication::class )
//			->disableOriginalConstructor()
//			->disableOriginalClone()
//			->disableArgumentCloning()
//			->disallowMockingUnknownTypes()
//			->getMock();
//
//		// Configure the stub.
//		$stub->method( 'generateTable' )
//			->willReturn( 'This is Output' );
//
//		$this->assertSame( 'This is Output', $stub->generateTable() );
		$ptimeNumbers = $this->objPrimeNumberMultiplication->getmixarrPrimeNumber();
		$this->assertEquals( $this->objPrimeNumberMultiplication->getintPrimeNumbersLimit(), $this->primeNumberCount );
		$this->assertEquals( count( $ptimeNumbers ), $this->primeNumberCount );

		$primeTable = $this->objPrimeNumberMultiplication->generateTable();

		$this->assertNotEmpty( $primeTable );
		$this->assertTrue( is_string( $primeTable ) );

		$strOutput = str_pad( '', 11, ' ', STR_PAD_LEFT );
		$strOutput .= sprintf( implode( '   ', $ptimeNumbers ) );

		$this->assertContains( $strOutput, $primeTable );
	}

}
