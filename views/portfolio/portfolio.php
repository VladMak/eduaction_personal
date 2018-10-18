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
	<div class="container gallery-container">

		<div class="tz-gallery">

			<div class="row">

				<?php
				for($i = 2; $i < count($photos); $i++) {
                    ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a class="lightbox">
                                <img style="image-orientation: from-image; object-fit: contain;" src="<?php echo Url::base() . '/' . $path . '/' . $photos[$i];  ?>" alt="Park">
                            </a>
                            <div class="caption">
                                <h3>Название фото</h3>
                                <p>18.10.2018</p>
                            </div>
                        </div>
                 </div>
                 <?php
             }
             ?>


         </div>

     </div>
 </div>
</section>