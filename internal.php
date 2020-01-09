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
	<h1>Textiles</h1>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Alcantra &reg;</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><p><strong>Alcantara&reg;</strong> is already globally recognized in the high end fashion, furnishing and automotive markets. Now, the world of aviation has embraced Alcantara’s® proven qualities as an exclusive, high-performance luxury material. Comfort, style and elegance make it the ideal travelling companion for the interiors of private jets and helicopters and for those aircraft of the world’s biggest airlines.</p></div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Marquis&trade;</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><p><strong>Marquis&trade;</strong>A uniquely designed, multi-colored, multi-weave “Epingle” fabric. Marquis was specifically designed to coordinate with many carpet, laminate, and wood veneer options currently on the market. More durable and appealing than a standard grospoint, its construction makes Marquis the premium selection for bulkheads, baggage storage areas and seating accents.</p></div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>MirageSS</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><p><strong>MirageSS</strong> A polyurethane-coated fabric produced using 100 percent knit Rayon backing cloth, Mirage SS has excellent stretch and texture. Mirage SS is the right choice for headliner and side wall applications where wrapping and gluing of compound curves is important.</p></div>
	</div>
	<div class="product-box container">
		<div>
			<div class="textbox">
				<h2>Shearling</h2>
				<div class="product-cta">
					<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
					<div class="text">View this product</div>
				</div>
			</div>
		</div>
		<div><p><strong>Shearling</strong> is well-known natural product that keeps pilot seats comfortable year-round.  We use only high quality, deep nap sheepskin to boost fiber air circulation and seating satisfaction.</p></div>
	</div>
</div>

<?php require('elements/footer.php'); ?>
