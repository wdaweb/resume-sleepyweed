<h3>新增基本資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>基本資料:</td>
      <td><input type="text" name="content" id=""></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="hidden" name="table" value="basic_content">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </td>
    </tr>
  </table>
</form>