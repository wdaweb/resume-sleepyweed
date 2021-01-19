<?php

include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

/* if($acc=='admin' && $pw=='1234'){
    $check=1;
}else{

    $check=$Admin->count(['acc'=>$acc,"pw"=>$pw]);

} */

$check=$Admin->count(['acc'=>$acc,"pw"=>$pw]);

if($check>0){
    
    $_SESSION['login']=$acc;

    to("../backend.php");
}else{
    to("../index.php?do=login&err=1");
}


?>