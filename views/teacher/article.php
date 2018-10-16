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
				<?php
				foreach ($article as $key => $value) {

					?>
					<div class="row mavl_article">
						<div class="col-12">
							<h3 class="heading text-capitalize mb-lg-5 mb-4"><?php echo $value['title']; ?></h3>
						</div>
						<div class="col-md-8">
							<p>
								<?php
								if(strlen($value['description']) > 1200){
									echo mb_substr($value['description'], 0, 1200, 'utf-8').'...';
								}else{
									echo $value['description'];
								}

								?>
							</p>
						</div>
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo $value['img']; ?>" alt="Картинка стати">
						</div>
						<div class="col-12 mavl_read_more_div">
							<a class="mavl_read_more" href="<?php echo Url::to(['teacher/single', 'id' => $value['id'], 'who' => $value['who']]); ?>">Читать еще</a>
						</div>
					</div>
					<?php
				}
				?>

			</div>
			<?php
			if(!isset($_GET['page'])){
				$next_page = 1;
			}else{
				$next_page = $_GET['page'] + 1;
				$prev_page = $_GET['page'] - 1;
			}

			if(!isset($_GET['page']) || $_GET['page'] === '0' && count($article) == 10){ ?>
				<div class="col-lg-12 but_next_prev">
					<a class="mavl_read_more" href="<?php echo Url::to(['parent/article', 'id' => $_GET['id'], 'page' => $next_page]); ?>">Следующая страница</a>
				</div>
			<?php }else if(count($article) < 10){ ?>
				<div class="col-lg-12 but_next_prev">
					<a class="mavl_read_more" href="<?php echo Url::to(['parent/article', 'id' => $_GET['id'], 'page' => $prev_page]); ?>">Предыдущая страница</a>
				</div>
			<?php }else{ ?>
				<div class="col-lg-12 but_next_prev">
					<a class="mavl_read_more" href="<?php echo Url::to(['parent/article', 'id' => $_GET['id'], 'page' => $prev_page]); ?>">Предыдущая страница</a>
					<a class="mavl_read_more" href="<?php echo Url::to(['parent/article', 'id' => $_GET['id'], 'page' => $next_page]); ?>">Следующая страница</a>
				</div>
			<?php }
			?>
		</div>
	</div>
</section>