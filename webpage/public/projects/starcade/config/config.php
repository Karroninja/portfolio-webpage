<?php

// Report all type of errors.
error_reporting(-1);
// Display all errors.
ini_set('display_errors', -1);

// If session is not set, start session.
if (!isset($_SESSION)) {
    $name = preg_replace("/[^a-z\d]/i", "", __DIR__);
    // Start the named session,
    // the name is based on the path to this file.
    session_name($name);
    session_start();
}

// Include the functions.php file
// include_once("../src/functions.php");
