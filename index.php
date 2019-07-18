<?php 

function selectImage($num) {
	// get all the images
	$images = glob("image/*.jpg");

	// splite the given number
	$split = str_split($num);

	// make a loop for every image
	foreach ($split as $key => $value) {
		echo "<img src='" . $images[$value] . "' alt='" . $value . "'>";
	}
}

selectImage(500); 

?>