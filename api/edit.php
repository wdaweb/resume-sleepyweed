<?php
include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);

foreach($_POST['id'] as $key=>$id){
  if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
    //任一筆被勾選刪除，且其id在陣列裡面則刪除
    $db->del($id);
  }else{
    //否則為更新內容
    $row=$db->find($id);

    switch($table){
      case "banner":
        $row['sh']=($id==$_POST['sh'])?1:0;  //post過來的id是否和本身的id相同，相同要顯示
      break;

      case "basic":
        $row['intro']=$_POST['intro'][$key];
        $row['sh']=($id==$_POST['sh'])?1:0;
      break;

      case "basic_content":
      case "port":
        $row['content']=$_POST['content'][$key];
        $row['sh']=(in_array($id,$_POST['sh']))?1:0;  //判斷哪幾筆顯示哪幾筆隱藏
      break;

      case "skill":
        $row['title']=$_POST['title'][$key];
        $row['sh']=(in_array($id,$_POST['sh']))?1:0;
      break;

      case "exp":
        $row['title']=$_POST['title'][$key];
        $row['date']=$_POST['date'][$key];
        $row['event']=$_POST['event'][$key];
        $row['content']=$_POST['content'][$key];
        $row['sh']=(in_array($id,$_POST['sh']))?1:0;
      break;

      
      default:
        $row['sh']=(in_array($id,$_POST['sh']))?1:0;
    }
    $db->save($row);
  }
}

if($_POST['table']=="basic_content"){
  to("../backend.php?do=basic");
}else{
  to("../backend.php?do=$table");
}
?>