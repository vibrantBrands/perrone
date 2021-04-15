<?php require('elements/header.php'); ?>

<?php require('elements/navigation.php'); ?>

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
							<strong>Compliance:</strong> ALCANTARA is specifically designed and engineered to meet all OSU 65/65 heat release requirements.
						</div>
						
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Performance.svg" alt="Performance" />
						<div>
							<strong>Performance:</strong> ALCANTARA is offered as a system and must be used in conjunction with Perrone’s proprietary AeroTak Adhesive in accordance with the AeroTak Adhesive Application Instructions.
						</div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Customization.svg" alt="Customization" />
						<div>
							<strong>Customization:</strong> ALCANTARA offers endless customization possibilities such as laser etching or perforations, while providing a perfect balance of technology and tradition.
						</div>

					</div>
				</div>
				<div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Durability.svg" alt="Durability" />
						<div>
							<strong>Durability:</strong> ALCANTARA is not of animal origin, making it highly unique and sustainable. This material is scratch resistant and will never wear out.
						</div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Noise.svg" alt="Noise" />
						<div>
							<strong>Noise Analysis:</strong> ALCANTARA is acoustically absorbent, delivering superior noise reduction characteristics and the highest quality in-cabin experience.
						</div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Cleaning.svg" alt="Cleanability" />
						<div>
							<strong>Cleanability:</strong> Like leather, regular cleaning of Alcantara is recommended. Alcantara is easily cleaned with Perrone’s Alcantara Cleaner and Micro Lather Aircraft Upholstery Cleaner.
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<!-- first product -->
	<div class="product-box container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/Master_FR.jpg" alt="Master FR">
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
			<img src="<?php echo $this->getThemePath(); ?>/img/Avant.jpg" alt="Avant">
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
			<img src="<?php echo $this->getThemePath(); ?>/img/Infinito.jpg" alt="Infinito">
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

</div>

<?php require('elements/footer.php'); ?>
