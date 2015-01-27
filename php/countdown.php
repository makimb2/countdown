<?php

//if (PHP_SAPI !== 'cli') {
  //  die (PHP_EOL.'Please run '.__FILE__.' from the command-line.'.PHP_EOL.PHP_EOL);
//}

function countdown($seconds)
{
    $x = $seconds;
    while ($x >= 0) {
    	echo $x;
    	$x--;
    	
    }
    

}

countdown(10);

//die('0 All done...');