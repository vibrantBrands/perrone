<?php require('elements/header.php'); ?>

<?php require('elements/navigation.php'); ?>

	<?php 	
		  $bt = BlockType::getByHandle('autonav');
		  $bt->controller->displayPages = 'above'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
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
	    $a = new Area('Page Header');
	    $a->display($c);
	?>

	<div class="container">
		<?php
		    $a = new Area('Product Text');
		    $a->display($c);
	?>
	</div>

	<div class="container">
		<div class="spec-wrapper">
			<div class="read-specs">
				 <span>Technical Specs</span><i class="fas fa-caret-right"></i>
			</div>
			<div class="specs">
				<div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Compliance.svg" alt="Compliance" />
						<div>
							<strong>Compliance:</strong> Monulite is specifically designed and engineered to meet all OSU 65/65 heat release requirements.
						</div>
						
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Performance.svg" alt="Performance" />
						<div>
							<strong>Performance:</strong> Monulite is offered as a “system” and must be used in conjunction with Perrone’s proprietary AeroTak Adhesive following the AeroTak Adhesive Application Instructions.
						</div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Customization.svg" alt="Customization" />
						<div>
							<strong>Customization:</strong> Monulite is available in any custom color and a variety of finishes and textures, including decorative Gaufrage prints. Our proprietary backing material provides an alternative to hard surface products available on the market today. 
						</div>

					</div>
				</div>
				<div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Durability.svg" alt="Durability" />
						<div>
							<strong>Durability:</strong> Monulite’s inherent strength makes it the ideal selection for high traffic areas.
						</div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Noise.svg" alt="Noise" />
						<div>
							<strong>Noise Analysis:</strong> Monulite is acoustically absorbent, delivering superior noise reduction characteristics and the highest quality in-cabin experience.
						</div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Cleaning.svg" alt="Cleanability" />
						<div>
							<strong>Cleanability:</strong> Monulite can be easily cleaned in place. For more severe damage areas, panels may be replaced without the need for reupholstering.
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<!-- first product -->
	<div class="product-box container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/Marquis.jpg" alt="Marquis">
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
			<img src="<?php echo $this->getThemePath(); ?>/img/Monulite.jpg" alt="Monulite">
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

</div>

<?php require('elements/footer.php'); ?>
