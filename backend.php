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
	<!-- popUp -->
	<div id="cover" style="display:none; ">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;color:#fff" onclick="cl('#cover')">X</a>
        <div id="cvr" style=""></div>
    </div>
  </div>

  <div class="bg">
		<section id="banner">
			<!-- <img src="https://picsum.photos/1024/250/?random=1" onclick="lo('index.php')" style='cursor:pointer'>  -->
  	</section>
		<table class="main-tb">
			<tr class="main-tr">
				<td onclick="lo('?do=banner')" style='cursor:pointer'>Banner</td>
				<td onclick="lo('?do=basic')" style='cursor:pointer'>Basic</td>
				<td onclick="lo('?do=skill')" style='cursor:pointer'>Skill</td>
				<td onclick="lo('?do=exp')" style='cursor:pointer'>Experience</td>
				<td onclick="lo('?do=port')" style='cursor:pointer'>Portfolio</td>
				<td onclick="lo('?do=bottom')" style='cursor:pointer'>Bottom</td>
			</tr>
		</table>
		<?php
		$do=(isset($_GET['do']))?$_GET['do']:'banner';
					$file="./backend/".$do.".php";
					if(file_exists($file)){
						include $file;
					}else{
						include "./backend/banner.php";
					}
		?>
		<section id="admin">
			<button class="btn btn-secondary mx-3 my-3" onclick="lo('api/logout.php')" style="float:right;">管理登出</button>
		</section>
	</div>
</body>
</html>