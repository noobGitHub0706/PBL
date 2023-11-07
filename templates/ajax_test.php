<?php
    header('Content-type: text/plain; charset= UTF-8');
    if(isset($_POST['email']) && isset($_POST['password'])){
        $id = $_POST['email'];
        $pas = $_POST['password'];
        $str = "AJAX REQUEST SUCCESS\nemail:".$id."\npassword:".$pas."\n";
        $result = nl2br($str);
        echo $result;
    }else{
        echo 'FAIL TO AJAX REQUEST';
    }
?>
