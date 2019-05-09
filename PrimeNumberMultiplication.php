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
		for( $i = 1; $i <= $this->intPrimeNumbersLimit; $i++ ) {

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
		echo 'This is Output';
	}

}