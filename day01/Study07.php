<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/27 0027
 * Time: 19:09
 */

$x=5;
$y=10;

function myTest()
{
    global $x,$y;
    $y=$x+$y;
}

myTest();
echo $GLOBALS['x']; // 输出 15
