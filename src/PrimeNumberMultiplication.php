<?php

namespace src;

class PrimeNumberMultiplication {

	/**
	 * Limit of Prime Numbers to be generated
	 * @var  int
	 */
	protected $intPrimeNumbersLimit = 10;

	/**
	 * Generated Prime Numbers
	 * @var  array
	 */
	protected $mixarrPrimeNumber = [];

	/**
	 * PrimeNumberMultiplication constructor.
	 * @param int $intMaxNumbers
	 */
	public function __construct( int $intMaxNumbers = 10 ) {
		$this->intPrimeNumbersLimit = $intMaxNumbers ?? 10;
		$this->generatePrimeNumbers();
	}

	/**
	 * Method for Generating Prime Numbers
	 */
	protected function generatePrimeNumbers() {
		//numbers to be checked as prime
		for( $i = 1; count( $this->mixarrPrimeNumber ) != $this->intPrimeNumbersLimit; $i++ ) {

			$counter = 0;

			//all divisible factors
			for( $j = 1; $j <= $i; $j++ ) {

				if( $i % $j == 0 ) {

					$counter++;
				}
			}

			if( $counter == 2 ) {
				$this->mixarrPrimeNumber[] = $i;
			}
		}
	}

	public function generateTable() {
		$strOutput = str_pad( '', 11, ' ', STR_PAD_LEFT );
		$strOutput.= sprintf( implode( '   ', $this->mixarrPrimeNumber ) );
		$strOutput.= sprintf ( PHP_EOL . '+' . str_repeat( '-', $this->intPrimeNumbersLimit * 6 ) . PHP_EOL );
		foreach( $this->mixarrPrimeNumber as $primeNumber ) {
			$strOutput.= str_pad( $primeNumber, 5, ' ', STR_PAD_LEFT ).' |';
			for( $i = 0; $i < $this->intPrimeNumbersLimit; $i++ ) {
				$strOutput.= str_pad( ( $primeNumber * $this->mixarrPrimeNumber[$i] ), 5, ' ', STR_PAD_LEFT );
			}
			$strOutput.= PHP_EOL;
		}

		return $strOutput;
	}

	/**
	 * @return int
	 */
	public function getintPrimeNumbersLimit() {
		return $this->intPrimeNumbersLimit;
	}

	/**
	 * @return array
	 */
	public function getmixarrPrimeNumber() {
		return $this->mixarrPrimeNumber;
	}

	/**
	 * @param int $intPrimeNumbersLimit
	 */
	public function setintPrimeNumbersLimit( $intPrimeNumbersLimit ) {
		$this->intPrimeNumbersLimit = $intPrimeNumbersLimit;
	}

	/**
	 * @param array $mixarrPrimeNumber
	 */
	public function setmixarrPrimeNumber( $mixarrPrimeNumber ) {
		$this->mixarrPrimeNumber = $mixarrPrimeNumber;
	}

}
