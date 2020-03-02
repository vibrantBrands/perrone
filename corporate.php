<?php require('elements/header.php'); ?>

<?php require('elements/navigation.php'); ?>

	<?php 	
		  $bt = BlockType::getByHandle('autonav');
		  $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
		  $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
		  $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
		  $bt->controller->displaySubPages = 'relevant';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
		  $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
		  $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
		  $bt->render('view'); // for template 'templates/template_name';
		?>
</nav>

<div class="content">
	<?php
	    $a = new Area('Header');
	    $a->display($c);
   	?>
	<div class="container">
		<?php
			$a = new Area('Top Content');
			$a->display($c);
		?>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Noble&trade;</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><?php
	         	$a = new Area('Product 1 Description');
	         	$a->display($c);
   			?> </div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Monarch&trade;</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div>
			<?php
	         	$a = new Area('Product 2 Description');
	         	$a->display($c);
   			?>
   		</div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Duchess</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div>
			<?php
	         	$a = new Area('Product 3 Description');
	         	$a->display($c);
   			?>
		</div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Alcantara</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><?php
	         	$a = new Area('Product 4 Description');
	         	$a->display($c);
   			?></div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Monulite</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><?php
	         	$a = new Area('Product 4 Description');
	         	$a->display($c);
   			?></div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Marquis</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><?php
	         	$a = new Area('Product 4 Description');
	         	$a->display($c);
   			?></div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Mirage</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><?php
	         	$a = new Area('Product 4 Description');
	         	$a->display($c);
   			?></div>
	</div>
</div>

<?php require('elements/footer.php'); ?>
