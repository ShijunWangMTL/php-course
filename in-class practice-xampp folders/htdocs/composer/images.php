<?php
// composer autoload
require './vendor/autoload.php';

// import intervention image manager class
use Intervention\Image\ImageManagerStatic as Image;

// open an image file
$img = Image::make('images/trex.jpg');

// resize image instance
$img->resize(320, 240);

// insert a watermark
//$img->insert('images/watermark.png');

// save image in desired format
$img->save('images/trex2.jpg');
#$image = Image::make('images/trex.jpg')->resize(300,200)->save('images/trex2.jpg',100);

echo '<img src="images/trex2.jpg" alt=""/>';



