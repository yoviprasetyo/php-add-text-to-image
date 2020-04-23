<?php

$image = imagecreatefrompng(__DIR__ . '/base.png');
imagealphablending($image, true);
$fontFile = __DIR__ . '/bebas.ttf';

$name = $_POST['name'] ?? '';
$birthPlace = $_POST['birth_place'] ?? '';
$birthDate = $_POST['birth_date'] ?? '';
$address = $_POST['address'] ?? '';

// Set Name
imagettftext($image, 25, 0, 20, 50, $color, $fontFile, $name);

// Set Birth Date and Place
imagettftext($image, 25, 0, 20, 90, $color, $fontFile, $birthPlace . ', ' . $birthDate);

// Set Address
imagettftext($image, 25, 0, 20, 130, $color, $fontFile, $address);

header("Content-type: image/png");
imagepng($image);
imagedestroy($image);