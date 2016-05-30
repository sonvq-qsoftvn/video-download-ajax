
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoID = $_POST['video'];
	$videoName = "test" . $videoID . ".mp4";	
	echo $videoName;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
	$videoName = $_GET['video'];
    
	header("Content-type: video/mp4");
    
	header("Content-Disposition:attachment;filename=\"$videoName\"");
	
    //allways a good idea to let the browser know how much data to expect
	header("Content-length: " . filesize($videoName) . "\n\n"); 
    
    // $videoName should contain the full path to the video
	echo file_get_contents($videoName); 
}
	