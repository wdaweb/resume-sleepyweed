	<section class="container">
		<div class="row flex-nowrap justify-content-around mx-3 my-4">
			<div class="pic col-6" style="background:url('img/<?=$Basic->find(['sh'=>1])['img'];?>') center no-repeat;
																		width:250px;height:250px"></div>
			<div class="col-6">
				<div style="font-size:1.8rem">關於我</div>
				<div style="padding:10px 10px 10px"><?=$Basic->find(['sh'=>1])['intro'];?></div>
				<?php
					$basic_con=$Basic_con->all(['sh'=>1]);
					// print_r($basic_con);
					foreach($basic_con as $con){
						echo"<li>";
						echo $con['content'];
						echo"</li>";
					}
				?>
			</div>
		</div>
	</section>
  <section id="skill" class="container">
		<div style="text-align:center;font-size:1.8rem">技能</div>
		<hr>
		<?php
			$skill1=$Skill->all(['sh'=>1,'type'=>'1']);
			$skill2=$Skill->all(['sh'=>1,'type'=>'2']);
			$skill3=$Skill->all(['sh'=>1,'type'=>'3']);
		?>
		<table style="width:70%;margin:auto;text-align:center">
			<tr>
				<td>
				<?php
					foreach($skill1 as $s1){
						echo "<div class='badge badge-secondary col-2 mx-3 my-2'>";
						echo $s1['title'];
						echo "</div>";
					}
				?>
				</td>
			</tr>
			<tr>
				<td>
				<?php
					foreach($skill2 as $s2){
						echo "<div class='badge badge-secondary col-2 mx-3 my-2'>";
						echo $s2['title'];
						echo "</div>";
					}
				?>
				</td>
			</tr>
			<tr>
				<td>
				<?php
					foreach($skill3 as $s3){
						echo "<div class='badge badge-secondary col-2 mx-3 my-2'>";
						echo $s3['title'];
						echo "</div>";
					}
				?>
				</td>
			</tr>
		</table>
			
			<!-- <div class="row justify-content-center"> -->
			<!-- </div> -->
	</section>
  <section id="exp" class="container my-3">
		<div style="text-align:center;font-size:1.8rem">學經歷</div>
		<hr>
		<div class="row justify-content-center">
		<?php
			$exps=$Exp->all(['sh'=>1]);
			foreach($exps as $exp){
		?>
					<div class="card col-4 mx-2 my-2" style="width:18rem;">
						<div class="card-body">
							<h5 class="card-title"><?=$exp['title'];?>|<?=$exp['date'];?></h5>
							<h6 class="card-subtitle mb-2 text-muted"><?=$exp['event'];?></h6>
							<p class="card-text"><?=$exp['content'];?></p>
						</div>
					</div>
		<?php
			}
			?>
		</div>	
		
	</section>
	<section id="port" class="container my-3">
		<div style="text-align:center;font-size:1.8rem">作品集</div>
		<hr>
		<div class="row justify-content-center">
		<?php
			$ports=$Port->all(['sh'=>1]);
			foreach($ports as $port){
		?>
			<div class="col-3">
				<div class="card">
					<div style="background:url('img/<?=$port['img'];?>') center no-repeat;
					background-size:cover;width:100%;height:220px" class="card-img-top">
					</div>
  				<div class="card-body">
    			<p class="card-text"><?=$port['content'];?></p>
  				</div>
			</div>
		</div>
		<?php
			}
		?>
	</section>