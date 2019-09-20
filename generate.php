<?php

$files = range( 1, 100000 );
$run_file = [ '<?php', 'echo "Starting";' ];

foreach( $files as $file ){
	$dir = '<?php return __DIR__;';
	$dirname = '<?php return dirname( __FILE__ );';
	file_put_contents( './script/dir/' . $file . '.php', $dir ); 
	file_put_contents( './script/dirname/' . $file . '.php', $dirname ); 
	$run_file[] = 'require( "' . $file . '.php" );';
}


$run_file[] = 'echo "done";';
file_put_contents( './script/dir/run.php', implode( $run_file, "\n" ) ) ; 
file_put_contents( './script/dirname/run.php', implode( $run_file, "\n" ) ) ; 
