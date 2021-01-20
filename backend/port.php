<form action="./api/edit.php" method="post">
  <table width="70%" class="tb">
  <tbody>
    <tr class="td-cor">
      <td width="25%">作品圖片</td>
      <td width="25%">作品介紹</td>
      <td width="10%">顯示</td>
      <td width="10%">刪除</td>
    </tr>
  </tbody>
  <?php
    $rows=$Port->all();
    foreach($rows as $row){
  ?>
    <tr class="td-cont">
    
      <td width="25%"><img src="./img/<?=$row['img'];?>" style="width:100px;height:100px"></td>
      <td width="25%"><textarea name="content[]" style="width:95%;height:70px"><?=$row['content'];?></textarea></td>
      <td width="10%"><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?> ></td>
      <td width="10%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
      <input type="hidden" name="id[]" value="<?=$row['id'];?>">
    </tr>
  <?php
    }
  ?>
  </table>
  
  <table class="tb" style="margin-top:130px;text-align:center">
    <tr>
    <input type="hidden" name="table" value="<?=$do;?>">
      <td>
      <input class="btn btn-secondary" type="button" 
          onclick="op('#cover','#cvr','./popup/<?=$do;?>.php?table=<?=$do;?>')" 
          value="新增作品圖片及介紹">
      </td>
      <td><input class="btn btn-secondary" type="submit" value="確定修改"></td>
      <td><input class="btn btn-secondary" type="reset" value="重置"></td>
    </tr>
  </table>

</form>