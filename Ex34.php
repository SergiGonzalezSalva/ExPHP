<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$imatge=imageCreate(100,30); 
	$col=ImageColorAllocate($imatge,255,255,0);
	$col2=ImageColorAllocate($imatge,0,0,0);
	$x1=0;
	$y1=0; 
	$x2=100;
	$y2=30;

	imageFilledRectangle($imatge,$x1,$y1,$x2,$y2,$col);
	imageString($imatge,10,30,5,"Button",$col2);

	Header ("Content-type: image/jpeg");
	ImageJPEG ($imatge);
	ImageDestroy($imatge);
	?>
</body>
</html>