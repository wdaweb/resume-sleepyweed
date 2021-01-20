<form action="./api/edit.php" method="post">
  <table width="70%" class="tb">
  <tbody>
    <tr class="td-cor">
      <td width="20%">個人照</td>
      <td width="30%">個人簡介</td>
      <td width="10%">顯示</td>
      <td width="10%">刪除</td>
    </tr>
  </tbody>
  <?php
    $rows=$Basic->all();
    foreach($rows as $row){
  ?>
    <tr class="td-cont">
      <td width="20%"><img src="./img/<?=$row['img'];?>" style="width:100px;height:100px"></td>
      <td width="30%"><textarea name="text" style="width:95%;height:70px"><?=$row['intro'];?></textarea></td>
      <td width="10%"><input type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?> ></td>
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
          value="新增個人照及簡介">
      </td>
      <td><input class="btn btn-secondary" type="submit" value="確定修改"></td>
      <td><input class="btn btn-secondary" type="reset" value="重置"></td>
    </tr>
  </table>

</form>
<form action="./api/edit.php" method="post">
  <table width="70%" class="tb">
  <tbody>
    <tr class="td-cor">
      <td width="40%">基本資料</td>
      <td width="15%">顯示</td>
      <td width="15%">刪除</td>
    </tr>
  </tbody>
  <?php
    $rows=$Basic_con->all();
    foreach($rows as $row){
  ?>
    <tr class="td-cont">
      <td width="40%"><textarea name="text" style="width:95%;height:70px"><?=$row['content'];?></textarea></td>
      <td width="15%"><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?> ></td>
      <td width="15%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
      <input type="hidden" name="id[]" value="<?=$row['id'];?>">
    </tr>
  <?php
    }
  ?>
  </table>
  
  <table class="tb" style="margin-top:130px;text-align:center">
    <tr>
    <input type="hidden" name="table" value="basic_content">
      <td>
      <input class="btn btn-secondary" type="button" 
          onclick="op('#cover','#cvr','./popup/basic_content.php?table=basic_content')" 
          value="新增基本資料">
      </td>
      <td><input class="btn btn-secondary" type="submit" value="確定修改"></td>
      <td><input class="btn btn-secondary" type="reset" value="重置"></td>
    </tr>
  </table>

</form>