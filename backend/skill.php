<form action="./api/edit.php" method="post">
  <table width="70%" class="tb">
  <tbody>
    <tr class="td-cor">
      <td width="50%">技能名稱</td>
      <td width="10%">顯示</td>
      <td width="10%">刪除</td>
    </tr>
  </tbody>
  <?php
    $rows=$Skill->all();

    foreach($rows as $row){
  ?>
    <tr class="td-cont">
      <td width="50%"><input type="text" name="title[]" value="<?=$row['title'];?>" style="width:50%;height:30px"></td>
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
          value="新增技能名稱">    <!--帶table值給popup/banner.php，當傳表單給api/add.php時會知道是哪張表要處理 -->
      </td>
      <td><input class="btn btn-secondary" type="submit" value="確定修改"></td>
      <td><input class="btn btn-secondary" type="reset" value="重置"></td>
    </tr>
  </table>

  
</form>