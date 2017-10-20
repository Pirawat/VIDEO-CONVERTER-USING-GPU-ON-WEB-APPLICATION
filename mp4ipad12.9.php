


<?php 
 // echo $_POST["1"];
 // $f = $_POST["message_pri"];

// if ($file == $_POST["1"];) {
    // echo "Have a good day!";
if($_POST["checkbox"]){
   $file = $_POST["checkbox"];
   
   if ($_POST["message_pri"]) {
   	# code...
   
 $f = $_POST["message_pri"];
// $file = $_POST["checkbox"];

$time_pre = microtime(true);
  $output  =  shell_exec("ffmpeg  -y -t '".$f."'  -i  '".$file."' -vcodec nvenc -s 2732x2048 -b:v 5M file_output_ipad.mp4  2>&1 ");

$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
// echo($output);
echo("\nfile_output_ipad.mp4"."  "."Process Time"."  ".$exec_time." "."s"."\n"."                            "."Next to Download");
// }
}
else {
	$time_pre = microtime(true);
  $output  =  shell_exec("ffmpeg  -y  -i  '".$file."' -vcodec nvenc -s 2732x2048 -b:v 5M file_output_ipad.mp4  2>&1 ");

$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
// echo($output);
echo("\nfile_output_ipad.mp4"."  "."Process Time"."  ".$exec_time." "."s"."\n"."                            "."Next to Download");
}
}
else{
   $file = "";   
   // echo "PLEASE SELECT VIDEO";
    echo "กรุณากดcancel แล้วเลือกไฟล์  ";

}

?>
