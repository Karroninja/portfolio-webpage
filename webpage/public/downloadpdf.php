<?php
include('../config/config.php');
$file = 'CV-Personligt-brev_Karoline_Lindroos.pdf';

header("Content-Disposition: attachment; filename=" . urlencode($file));
header("Content-Type: application/download");
header("Content-Disposition: File Transfer");
header("Content-Length: " . filesize($file));

$fp = fopen($file, "r");
while (!feof($fp)) {
    echo fread($fp, 65536);
    flush();
}

fclose($fp);

// if(!$file){
//     die('Error: file not found');
// } else {
//     header("Cache-Control: public");
//     header("Content-Description: File Transfer");
//     header("Content-Disposition: attachment; filename=$file");
//     header("Content-Type: application/pdf");
//     header("Content-Transfer-Encoding: binary");
//     readfile($file);
// }
// header('Content-disposition: attachment; filename=CV-Personligt-brev_Karoline_Lindroos.pdf');
// header('Content-type: application/pdf');
// readfile('CV-Personligt-brev_Karoline_Lindroos.pdf');