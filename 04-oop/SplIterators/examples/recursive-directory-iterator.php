<?php
/**
 * This is a basic example of recursively iterating over a directory,
 * skipping both "." and "..".
 */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . 'directory-iterator-example')
);

// iterate over all files from the child directory "directory-iterator-example"
foreach ($files as $file) {
	echo get_class($files) . PHP_EOL;
	echo get_class($file) . PHP_EOL;
	
    // skip over dots ("." and "..")
    if (!$files->isDot()) {
        // example of the 
        echo $file->getRealPath() . PHP_EOL;
    }
}