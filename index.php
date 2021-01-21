<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>resume</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./plugin/css.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="./plugin/jquery-1.9.1.min.js"></script>
  <script src="./plugin/js.js"></script>
</head>
<body>
  <div class="bg">
		<section id="banner" style="background:url('img/<?=$Banner->find(['sh'=>1])['img'];?>') no-repeat;
																background-size:cover;cursor:pointer" onclick="lo('?do=main')">
  	</section>
		<?php
		$do=(isset($_GET['do']))?$_GET['do']:'main';
					$file="./front/".$do.".php";
					if(file_exists($file)){
						include $file;
					}else{
						include "./front/main.php";
					}
		?>
		<section id="admin">
		  <?php
			if(isset($_SESSION['login'])){
			?>
			<button class="btn btn-secondary mx-3 my-3" onclick="lo('backend.php')" style="float:right;">返回管理</button>
			<?php
			}else{
			?>
			<button class="btn btn-secondary mx-3 my-3" onclick="lo('?do=login')" style="float:right;">管理登入</button>
			<?php
			}
			?>
		</section>
	</div>
</body>
</html>