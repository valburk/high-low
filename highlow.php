<?php

$rand = mt_rand ( 0, 100 );//insert random number funtion 
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
