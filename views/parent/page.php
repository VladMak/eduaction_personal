<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>
<!-- inner banner -->
<div class="inner_banner layer" id="home">
	<div class="container">
		<div class="agileinfo-inner">
			<h2 class="text-center text-white">
				<?php echo $name; ?>
			</h2>
		</div>
	</div>
</div>
<!-- //inner banner -->


<!-- about -->
<section class="about py-5">
	<div class="container py-sm-3">
		<div class="row about-grids">
			<div class="col-lg-6">
				<?php 
				echo $content;
				?>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<img src="images/history.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //about -->
