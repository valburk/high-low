<?php
// $min = $argv[1];
// $max = $argv[2];

// if (is_numeric(argv[1]) && is_numeric(argv[2])){
// 	$min = $argv[1];
// 	$max = $argv[2];
// }elseif{
// 	do{

// 	}while();

// }else{
// 	$min = 1
// 	$max = 100
// }


$rand = mt_rand ($min, $max );//insert random number funtion 
fwrite(STDOUT, "guess a number between $min and $max");

$number = fgets(STDIN);
do {
 
	if ($rand == $number) {
	    fwrite(STDOUT, 'You win!!');
	    $rand = mt_rand ( 0, 100 );
	}
	elseif ($rand > $number) {
	    // fwrite(STDOUT, 'Higher! Guess again:');
	    echo "higher! guess again:";
	    $number = fgets(STDIN);

	}
	elseif ($rand < $number) {
	    // fwrite(STDOUT, 'Lower! Guess agian:');
	    echo "lower! guess again:";
	     $number = fgets(STDIN);
	}

} while ($rand != fgets(STDIN));
