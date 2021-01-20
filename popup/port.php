<h3>新增作品圖片及介紹</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>作品圖片:</td>
      <td><input type="file" name="img" id=""></td>
    </tr>
    <tr>
      <td>作品介紹:</td>
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