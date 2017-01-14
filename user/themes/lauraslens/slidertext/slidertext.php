<?php
if(isset($_POST['slide']) && !empty($_POST['slide'])) {
	$slide = $_POST['slide'];
	$filepath = $slide . ".txt";

	$file = fopen($filepath, "r");

	echo fread($file, filesize($filepath));
	
	fclose($file);
	
	}

?>