<?php
/**
 * MAKING AVATAR FUNCTION
 */

 if(!function_exists('makeAvatar')){
    function makeAvatar($fontpath, $dest, $char){
        $width = '200';
        $height = '200';
        $path = $dest;
        $image = imagecreate($width,$height);
        $red = rand(0,255);
        $green = rand(0,255);
        $blue = rand(0,255);
        imagecolorallocate($image,$red,$green,$blue);
        $textcolor = imagecolorallocate($image,255,255,255);
        imagettftext($image,100,0,50,150,$textcolor,$fontpath,$char);
        imagepng($image,$path);
        imagedestroy($image);
        return $path;
    }
 }
?>
