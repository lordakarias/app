<!--<div class="popular">-->
	<section class="popular-idea">
		<div class="container">
			<h3 class="popular-par">Popular ideas</h3>
		</div>
		<div class="tabbable tabs container">
			<ul class="nav-tabs">
				<li class="active"><a href="#it" data-toggle="tab">It</a></li>
				<li><a href="#engineering" data-toggle="tab">Engineering</a></li>
				<li><a href="#agriculture" data-toggle="tab">Agriculture</a></li>
				<li><a href="#astronomy" data-toggle="tab">Astronomy</a></li>
				<li><a href="#genetics" data-toggle="tab">Genetics</a></li>
				<li><a href="#more-categories" data-toggle="tab">.....more categories</a></li>								
			</ul><!-- nav nav-tabs -->
		</div><!-- tabbable tabs -->
			<section class="tab-content">
		    	<?php include "popular-it.php"; ?>
		    	<?php include "popular-engineering.php"; ?>
		    	<?php include "popular-agriculture.php"; ?>
				<?php include "popular-astronomy.php"; ?>
				<?php include "popular-genetics.php"; ?> 
				<?php include "more-categories.php"; ?> 	
			</section><!-- tab-content -->
		<div class="container">
			<div class="more"><a href="#" class="pull-right">...more ideas</a></div>
		</div>
	</section>
<!--</div>-->

