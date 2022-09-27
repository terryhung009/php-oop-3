<?php
class animal{
    function can(){
        echo "this function weill be re-write in the children";
    }
}
class cat extends animal{
    function can(){
        echo "I can climb";
    }
}
class dog extends animal{
    function can(){
        echo "I can swim";
    }
}
function test($obj){
    $obj->can();
}
test(new cat());
test(new dog());
?>