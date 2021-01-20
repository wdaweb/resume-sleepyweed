<h3>新增banner</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>banner:</td>
      <td><input type="file" name="img" id=""></td>
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