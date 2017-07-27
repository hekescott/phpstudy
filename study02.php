<?php
$name = 'john';
if(isset($name)){
    print "$name is set \r\n";
    echo'</br>';
    unset($name);
    if(!isset($name)){
        print '$name is no set';
    }
}else{
    print '$name is no set';
}
?>