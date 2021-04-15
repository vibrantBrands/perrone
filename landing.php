<?php require('elements/header.php'); ?>

<?php require('elements/navigation.php'); ?>

	<?php 	
		  $bt = BlockType::getByHandle('autonav');
		  $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
		  $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
		  $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
		  $bt->controller->displaySubPages = 'none';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
		  $bt->controller->displaySubPageLevels = ''; // 'enough', 'enough_plus1', 'all', 'custom'
		  $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
		  $bt->render('view'); // for template 'templates/template_name';
		?>
</nav>

	<div class="content">
		<div class="tagline">Experience the richness of performance leather</div>
			<div class="links">
				<div>
					<a href="/corporate">CORPORATE | VIP</a>
				</div>
				<div>
					<a href="/commercial">COMMERCIAL</a>
				</div>
				<div>
					<a href="/alm">ALM</a>
				</div>
			</div>
			<div class="social">
				<div>
					<a href="https://twitter.com/Perrone_Aero" target="social">
						<i class="fab fa-twitter"></i>
					</a>
				</div>
				<div>
					<a href="https://www.youtube.com/channel/UCvcPVYH8Tj2BGBlUGe7KmUA" target="social">
						<i class="fab fa-youtube"></i>
					</a>
					
				</div>
				<div>
					<a href="https://www.instagram.com/perroneaerospace/?hl=en" target="social">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
				<div>
					<a href="https://www.linkedin.com/company/perrone-aerospace/" target="social"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>

		<div class="landing">
			
			<div class="landing-slider">
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/heroes/main/alcantara.png" class="product-pic" />
				</div>
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/heroes/main/avant.png" class="product-pic" />
				</div>
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/heroes/main/noble.png" class="product-pic" />
				</div>
			</div>
			
		</div>
	</div>

<?php require('elements/footer_bottom.php'); ?>
