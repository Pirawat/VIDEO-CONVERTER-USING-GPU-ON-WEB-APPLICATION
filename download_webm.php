<?php
    // Fetch the file info.
    // $mov = '/var/www/html/project/ui/file_output.mov';
 $filePath = '/var/www/html/project/ui/file_output.webm';
// if ($filePath == $mov || $filePath == $mp4) {

 // $filePath = '$mov||$mp4';
    if(file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);

        // Output headers.
        header("Cache-Control: private");
        header("Content-Type: application/stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);

        // Output file.
        readfile ($filePath);                   
        exit();
    }

    else {
        die('The provided file path is not valid.');
    }
?>