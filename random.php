<?php
$legitFiles = array();
foreach (scandir('.') as $file){
    if(substr($file,-3)=='mp3'){
    	$legitFiles.array_push($legitFiles, $file);
    }
}
$currHour = date('yzH');
srand($currHour);

header("Location: ". $legitFiles[rand(0, count($legitFiles))]);
exit();
?>