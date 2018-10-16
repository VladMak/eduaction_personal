<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<style type="text/css">

.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
    color: #58595a;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 30px auto;
    font-size: 18px;
    color: #85878c;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .thumbnail {
    padding: 0;
    margin-bottom: 30px;
    background-color: #fff;
    border-radius: 4px;
    border: none;
    transition: 0.15s ease-in-out;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.tz-gallery .thumbnail:hover {
    transform: translateY(-10px) scale(1.02);
}

.tz-gallery .lightbox img {
    border-radius: 4px 4px 0 0;
    width: 100%;
}

.tz-gallery .caption{
    padding: 26px 30px;
    text-align: center;
}

.tz-gallery .caption h3 {
    font-size: 14px;
    font-weight: bold;
    margin-top: 0;
}

.tz-gallery .caption p {
    font-size: 12px;
    color: #7b7d7d;
    margin: 0;
}

.baguetteBox-button {
    background-color: transparent !important;
}

.lightbox img{
    height: 220px;
    object-fit: cover;
    object-position: top;
}
	
</style>
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
	<div class="container gallery-container">

		<div class="tz-gallery">

			<div class="row">


				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a class="lightbox" href="/models/web/category/single?uri=projects&amp;id=0-3+%D0%BB%D0%B5%D1%82">
							<img src="/models/web/img/starkids/projects/0-3 лет/10_яна_ахметова.jpg" alt="Park">
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a class="lightbox" href="/models/web/category/single?uri=projects&amp;id=3-5+%D0%BB%D0%B5%D1%82">
							<img src="/models/web/img/starkids/projects/3-5 лет/14 адель балашова.jpg" alt="Park">
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a class="lightbox" href="/models/web/category/single?uri=projects&amp;id=6-8+%D0%BB%D0%B5%D1%82">
							<img src="/models/web/img/starkids/projects/6-8 лет/33 алина еншина.jpg" alt="Park">
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a class="lightbox" href="/models/web/category/single?uri=projects&amp;id=9-11">
							<img src="/models/web/img/starkids/projects/9-11/43 юлия овечкина.jpg" alt="Park">
						</a>
					</div>
				</div>


			</div>

		</div>
	</div>
</section>