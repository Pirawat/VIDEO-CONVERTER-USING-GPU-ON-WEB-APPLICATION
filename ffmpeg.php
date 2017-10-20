
<?php 

$file = "/var/www/html/project/ui/server/php/files/output.mov";
// $file = "/home/kwang/Development/ffmpeg/output.mov";
// $output_file ="";
  // echo "Starting ffmpeg...\n\n";


  // $output  =  shell_exec("time /home/kwang/Development/ffmpeg_build/ffmpeg  -y -t 60  -i  '".$file."' -vcodec nvenc file_output.mp4 2>&1 ");
 


 // echo "<pre>$output</pre>";



// if($_POST["chk"] == "1")
// {
  $output  =  shell_exec("time /home/kwang/Development/ffmpeg_build/ffmpeg  -y -t 60  -i  '".$file."' -vcodec nvenc file_output.mp4 2>&1 ");



// }


//  $filename = 'input.avi'; // of course find the exact filename....        
// header('Pragma: public');
// header('Expires: 0');
// header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
// header('Cache-Control: private', false); // required for certain browsers 
// header('Content-Type: application/pdf');

// header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
// header('Content-Transfer-Encoding: binary');
// header('Content-Length: ' . filesize($filename));

// readfile($filename);

// exit;
?>

 <!-- <a href="download.php">Download</a> -->
 <!-- <a href="5.php">Download</a> -->
