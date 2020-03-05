<?php 

$point=$_REQUEST['points'];

if ($point>1){
	$tam=$point;
}else{
	$tam=1;
}

$image=imageCreate(30*$tam,30); 
$col=ImageColorAllocate($image,255,255,255);
$col2=ImageColorAllocate($image,0,0,0);
$xc=15;
$yc=15; 
$width=20;
$height=20;
$des=0;

for ($i=0;$i<$point;$i++){

imageFillEdEllipse( $image, $xc+$des, $yc, $width, $height,$col2);	
$des+=30;

}

Header ("Content-type: image/jpeg");
ImageJPEG ($image);
ImageDestroy($image);

?>