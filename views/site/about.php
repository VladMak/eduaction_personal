<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

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
<section class="about py-5">
	<div class="container py-sm-3">
		<div class="row about-grids">
			<div class="col-lg-12">
				<div class="row mavl_article">
					<div class="col-md-8">
						<p>
							<?php
							echo $content;
							?>
						</p>
					</div>
					<div class="col-md-4">
						<img class="img-fluid" src="<?php echo $img; ?>" alt="Картинка стати">
					</div>
				</div>

			</div>
			
		</div>
	</div>
</section>