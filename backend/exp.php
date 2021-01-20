<form action="./api/edit.php" method="post">
  <table width="90%" class="tb">
  <tbody>
    <tr class="td-cor">
      <td width="10%">標題</td>
      <td width="10%">時間</td>
      <td width="20%">活動</td>
      <td width="30%">內容</td>
      <td width="10%">顯示</td>
      <td width="10%">刪除</td>
    </tr>
  </tbody>
  <?php
    $rows=$Exp->all();

    foreach($rows as $row){
  ?>
    <tr class="td-cont">
      <td width="10%"><textarea name="text" style="width:70%;height:30px"><?=$row['title'];?></textarea></td>
      <td width="10%"><textarea name="text" style="width:70%;height:30px"><?=$row['date'];?></textarea></td>
      <td width="20%"><textarea name="text" style="width:70%;height:30px"><?=$row['event'];?></textarea></td>
      <td width="30%"><textarea name="text" style="width:70%;height:30px"><?=$row['content'];?></textarea></td>
      <td width="10%"><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
      <td width="10%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
      <input type="hidden" name="id[]" value="<?=$row['id'];?>">
    </tr>
  <?php
    }
  ?>
  </table>
  <table class="tb" style="margin-top:130px;text-align:center">
    <tr>
    <input type="hidden" name="table" value="<?=$do;?>">  <!-- 傳值進入api/edit.php -->
      <td>
        <input class="btn btn-secondary" type="button" 
          onclick="op('#cover','#cvr','./popup/<?=$do;?>.php?table=<?=$do;?>')" 
          value="新增學經歷">    <!--帶table值給popup/banner.php，當傳表單給api/add.php時會知道是哪張表要處理 -->
      </td>
      <td><input class="btn btn-secondary" type="submit" value="確定修改"></td>
      <td><input class="btn btn-secondary" type="reset" value="重置"></td>
    </tr>
  </table>

  
</form>