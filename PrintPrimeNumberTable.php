<?php
include 'vendor\autoload.php';

use src\PrimeNumberMultiplication;

if( $argc >= 2 ) {
	$primeNumberCount = (int) $argv[1];
	if( 0 >= $primeNumberCount ) {
		exit( 'Invalid Number' );
	}

	$objPrimeNumber = new PrimeNumberMultiplication( $primeNumberCount );
	echo $objPrimeNumber->generateTable();
} else {
	echo 'Supplied number of arguments are not enough';
}