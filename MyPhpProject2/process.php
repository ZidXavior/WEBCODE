<?php
    function printNames($what,$many_times){
        for($i=0;$i<$many_times;$i++){
            echo $what."<br>";
        }
    }
    $what = $_POST['what'];
    $how = $_POST['how'];
    $many_times = $_POST['many_times'];

    if($how == "with"){
        printNames($what,$many_times); 
    }
    else{
        for($i=0;$i<$many_times;$i++){
            echo $what."<br>";
        }
    }

?>