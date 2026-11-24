<?php
 
function placeholder_image($key) {
    $index = (crc32($key) % 10) + 1;
    return "images/{$index}.jpg";
}