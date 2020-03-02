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
            $a = new Area('Product Name');
            $a->display($c);
    ?>  
	<div class="product-description container">
		<div>
			<?php
            	$a = new Area('Product Top Graf');
            	$a->display($c);
        	?>  
		</div>
		<div>
			<div class="slider-wrapper">
				<div class="product-slider">
					<?php
            			$a = new Area('Product Images');
            			$a->display($c);
        			?> 
				</div>
			</div>
		</div>
	</div>
	<div class="container full">
		<?php
            $a = new Area('Product Description');
            $a->display($c);
        ?>
	</div>
	<div class="video-boxes container">
		
		<a href="https://youtu.be/2YPdBv2Y2MM" data-lity>
			<div>
				<div class="textbox">
					<h2>Alcantra Care</h2>
						<img src="<?php echo $this->getThemePath(); ?>/img/play-icon.png"/>
				</div>
			</div>
		</a>
		<a href="https://youtu.be/aCQBEoOwLBs" data-lity>
			<div>
				<div class="textbox">
					<h2>Satisfied Customers</h2>
						<img src="<?php echo $this->getThemePath(); ?>/img/play-icon.png"/>
				</div>
			</div>
		</a>
	</div>

</div>

<?php require('elements/footer.php'); ?>
