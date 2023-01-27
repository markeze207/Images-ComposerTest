<?php
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(['driver' => 'imagick']);

// and you are ready to go ...
$image = Image::make(__DIR__ . '/image/test.jpg');
$image->resize(300, 200);
$image->save(__DIR__ . '/image/test_resize.jpg');