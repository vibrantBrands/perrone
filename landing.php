<?php require('elements/header.php'); ?>

<?php require('elements/navigation.php'); ?>

	<?php 	
		  $bt = BlockType::getByHandle('autonav');
		  $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
		  $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
		  $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
		  $bt->controller->displaySubPages = 'none';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
		  $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
		  $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
		  $bt->render('view'); // for template 'templates/template_name';
		?>
</nav>

	<div class="content landing">
		<div class="landing-slider">
			<div>
				<div class="inner">
					<h1>Experience the richness of performance leather</h1>
					<p>
						CORPORATE | VIP
					</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/brown-leather.png" class="product-pic" />
				</div>
			</div>
			<div>
				<div class="inner">
					<h1>Experience the richness of performance leather</h1>
					<p>AIRLINES</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/brown-leather.png" class="product-pic" />
				</div>
			</div>
			<div>
				<div class="inner">
					<h1>Experience the richness of performance leather</h1>
					<p>ALCANTARA</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/brown-leather.png" class="product-pic" />
				</div>
			</div>
			<div>
				<div class="inner">
					<h1>Experience the richness of performance leather</h1>
					<p>Noble</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/brown-leather.png" class="product-pic" />
				</div>
			</div>
		</div>
	</div>

<?php require('elements/footer_bottom.php'); ?>
