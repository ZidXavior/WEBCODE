<?php
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];
    $hd = $_POST['hd'];
    $tip = $_POST['tip'];
    
    $bill = $quantity * 12.5;
    if($quantity>=1 && $quantity<=9){
        $bill = $bill * 0.9;
    } 
    elseif($quantity>=10 && $quantity<=19){
        $bill = $bill * 0.85;
    }
    else{
        $bill = $bill * 0.8;
    }

    if($address =="dhaka"){
        $bill = $bill * 1.2;
    }
    else{
        $bill = $bill * 1.1;
    }

    if($hd == "yes"){
        $bill = $bill + 40;
    }

    $bill = $bill + $tip;

    echo "Your bill is " . $bill;
?>