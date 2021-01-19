<?php
	if(isset($_GET['err'])){
		echo "<script>alert('帳號或密碼輸入錯誤')</script>";
	}

?>
<div class="d-flex justify-content-center mt-4">
<form method="post" action="api/login.php">
			<p>管理員登入區</p>
			<p>帳號:<input name="acc" type="text"></p>
			<p>密碼:<input name="pw" type="password"></p>
			<p><input class="btn btn-secondary mx-3" value="送出" type="submit"><input class="btn btn-secondary mx-3" type="reset" value="重置"></p>
</form>
</div>