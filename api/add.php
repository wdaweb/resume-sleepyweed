<?php
include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);

$data=[];
if(!empty($_FILES['img']['tmp_name'])){
  move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
  $data['img']=$_FILES['img']['name'];
}
if(!empty($_POST['text'])){
  $data['text']=$_POST['text'];
}

switch($table){
  case "banner":
    $data['sh']=0;
  break;

  case "basic":
    $data['intro']=$_POST['intro'];
    $data['sh']=0;
  break;
  
  case "basic_content":
    $data['content']=$_POST['content'];
    $data['sh']=1;
  break;

  case "admin":
    $data['acc']=$_POST['acc'];
    $data['pw']=$_POST['pw'];
  break;

  default:
    $data['sh']=1;
}
$db->save($data);

if($_POST['table']=="basic_content"){
  to("../backend.php?do=basic");
}else{
  to("../backend.php?do=$table");
}

?>