<?php

$files = range( 1, 100000 );
$run_file = [ '<?php', 'echo "Starting";', 'echo PHP_EOL;' ];
$run_dirs = [ '<?php', 'echo "Starting";', 'echo PHP_EOL;' ];

mkdir( './script/directories/' );
mkdir( './script/directories/dir/' );
mkdir( './script/directories/dirname/' );
foreach( $files as $file ){
	$dir = '<?php return __DIR__;';
	$dirname = '<?php return dirname( __FILE__ );';
	file_put_contents( './script/dir/' . $file . '.php', $dir ); 
	file_put_contents( './script/dirname/' . $file . '.php', $dirname ); 
	mkdir( './script/directories/dir/' . $file );
        mkdir( './script/directories/dirname/' . $file );
	file_put_contents( './script/directories/dir/' . $file . '/file.php', $dir );
	file_put_contents( './script/directories/dir/name' . $file . '/file.php', $dirname );
	$run_dirs[] = 'require( "' . $file . '/file.php" );';
	$run_file[] = 'require( "' . $file . '.php" );';
}


$run_file[] = 'echo "done";';
$run_file[] = 'echo PHP_EOL; ';
$run_dirs[] = 'echo "done";';
$run_dirs[] = 'echo PHP_EOL; ';
file_put_contents( './script/dir/run.php', implode( $run_file, "\n" ) ) ; 
file_put_contents( './script/dirname/run.php', implode( $run_file, "\n" ) ) ; 
file_put_contents( './script/directories/dir/run.php', implode( $run_dirs, "\n" ) );
file_put_contents( './script/directories/dirname/run.php', implode( $run_dirs, "\n" ) );
