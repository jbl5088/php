<?php
/*
Factory Methods are used to reutrn an instance of an object that is a subclass of the object containing the factory method.
*/
abstract class GDImage {
	$info = getimagesize($filename);
	
	$type = $info[2];
	
	switch($type) {
		case IMAGETYPE_JPEG:
			new new JPEGImage($filename);
		case IMAGETYPE_PNG:
			new new PNGImage($filename);
		case IMAGETYPE_GIF:
			new new GIFImage($filename);
	}
	
	return null;
}
?>