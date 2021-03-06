<?php require('elements/header.php'); ?>

<?php require('elements/navigation_blue.php'); ?>

	<?php 	
		  $bt = BlockType::getByHandle('autonav');
		  $bt->controller->displayPages = 'second_level'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
		  $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
		  $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
		  $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
		  $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
		  $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
		  $bt->render('view'); // for template 'templates/template_name';
		?>
</nav>

<div class="content blue-theme">
	<div class="header-area">
		<?php
	    	$a = new Area('Page Header');
	    	$a->display($c);
		?>
	</div>
	<div class="container">
		<?php
		    $a = new Area('Product Text');
		    $a->display($c);
	?>
	</div>

	<!-- first product -->
	<div class="product-box container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/samples/elite_horiz.png" alt="elite thumb">
			<div class="textbox">
				<?php
		            $a = new Area('Product Name 1');
		            $a->display($c);
		        ?> 
				<div class="product-cta">
					<!-- <img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">  -->
					<div class="text">
						<?php
		            		$a = new Area('Product Link 1');
		            		$a->display($c);
		        	?> </div>
				</div>
			</div>
		</div>
		<div>
			<?php
	            $a = new Area('Product Description 1');
	            $a->display($c);
	        ?> 
		</div>
	</div>

	<!-- second product -->

	<div class="product-box container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/samples/featherweight_horiz.png" alt="Featherweight">
			<div class="textbox">
				<?php
		            $a = new Area('Product Name 2');
		            $a->display($c);
		        ?> 
				<div class="product-cta">
					<div class="text">
						<?php
		            		$a = new Area('Product Link 2');
		            		$a->display($c);
		        	?> </div>
				</div>
			</div>
		</div>
		<div>
			<?php
	            $a = new Area('Product Description 2');
	            $a->display($c);
	        ?> 
		</div>
	</div>

	<!-- third product -->

	<div class="product-box container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/samples/Skyline.JPG" alt="Skyline">
			<div class="textbox">
				<?php
		            $a = new Area('Product Name 3');
		            $a->display($c);
		        ?> 
				<div class="product-cta">
					<div class="text">
						<?php
		            		$a = new Area('Product Link 3');
		            		$a->display($c);
		        	?> </div>
				</div>
			</div>
		</div>
		<div>
			<?php
	            $a = new Area('Product Description 3');
	            $a->display($c);
	        ?> 
		</div>
	</div>
	
	<!-- fourth product -->

	<div class="product-box container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/samples/select_horiz.png" alt="Select">
			<div class="textbox">
				<?php
		            $a = new Area('Product Name 4');
		            $a->display($c);
		        ?> 
				<div class="product-cta">
					<div class="text">
						<?php
		            		$a = new Area('Product Link 4');
		            		$a->display($c);
		        	?> </div>
				</div>
			</div>
		</div>
		<div>
			<?php
	            $a = new Area('Product Description 4');
	            $a->display($c);
	        ?> 
		</div>
	</div>

	<!-- fifth product -->

	<div class="product-box container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/samples/shearling.png" alt="Shearling">
			<div class="textbox">
				<?php
		            $a = new Area('Product Name 5');
		            $a->display($c);
		        ?> 
				<div class="product-cta">
					<div class="text">
						<?php
		            		$a = new Area('Product Link 5');
		            		$a->display($c);
		        	?> </div>
				</div>
			</div>
		</div>
		<div>
			<?php
	            $a = new Area('Product Description 5');
	            $a->display($c);
	        ?> 
		</div>
	</div>

</div>

<?php require('elements/footer_blue.php'); ?>
