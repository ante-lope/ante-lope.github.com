<?php

$width = 192;

$ret = array(
    "total"  => 29,
    "result" => array(),
);

for($i=1;$i<=24;$i++){

    $arr = getimagesize("{$i}.jpeg");
    $w = $arr[0];
    $h = $arr[1];
    $height = ($h/$w) * $width;
    $path = "/diandian/demos/data/{$i}.jpeg";
    $ret["result"][] = array(
            "image" => $path,
            "width" => $width,
            "height"=> $height
            );
}

print_r(json_encode($ret));
