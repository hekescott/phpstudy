<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/27 0027
 * Time: 19:46
 */
//默认大小写敏感
define("TESTCONST","我是常量");
define("BR","<br>");
echo  TESTCONST;
echo  BR;
//默认大小写不敏感
define("TESTCONST2","我是常量2",true);
echo  TESTCONST2;