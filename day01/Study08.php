<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/27 0027
 * Time: 19:23
 */
$x=5;
$y=10;

function myTest()
{
//    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

myTest();
echo $GLOBALS['y'];