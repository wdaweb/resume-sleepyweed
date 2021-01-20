<h3>新增學經歷</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>標題:</td>
      <td><input type="text" name="title" id=""></td>
    </tr>
    <tr>
      <td>時間:</td>
      <td><input type="text" name="date" id=""></td>
    </tr>
    <tr>
      <td>活動:</td>
      <td><input type="text" name="event" id=""></td>
    </tr>
    <tr>
      <td>內容:</td>
      <td><input type="text" name="content" id=""></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </td>
    </tr>
  </table>
</form>