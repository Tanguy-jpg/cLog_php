<?php
require_once('cLog-start.php');

// TESTS
$string = "bonjour";
$boolean = false;
$integer = 15;
$float = 15.12;
$array = ['ok',1,2,'waw',['wtf','is','happening']];
// object 
class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}
$object = new foo;
// end object

cLog($string);
cLog($boolean);
cLog($integer);
cLog($float);
cLog($array);
cLog($object);
// END TESTS


require_once('cLog-end.php');