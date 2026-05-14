<?php
function countVisit($page) {

    // Create the public/data folder if it does not already exist.
    $dir = __DIR__ . "/data/";
    if ( !is_dir( $dir ) ) {
        mkdir( $dir );
    }

    // Create file public/data/$page.txt if it does not already exist.
    $pageFile = $dir . $page . ".txt";
    if ( !file_exists( $pageFile ) ) file_put_contents( $pageFile, 0 );

    // Open public/data/$page.txt, increment the counter, then close it.
    $fp1 = fopen( $pageFile, "c+" );
    flock( $fp1, LOCK_EX );
    $pageCount = (int)fread($fp1, filesize($pageFile));
    $pageCount++;
    ftruncate( $fp1, 0 );
    rewind( $fp1 );
    fwrite( $fp1, $pageCount );
    flock( $fp1, LOCK_UN );
    fclose($fp1);

    return;
}
?>