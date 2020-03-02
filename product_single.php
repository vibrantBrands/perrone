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
            	$a = new Area('Product Description');
            	$a->display($c);
        	?>  
		</div>
		<div>
			<?php
            	$a = new Area('Product Image');
            	$a->display($c);
        	?> 
		</div>
	</div>
	<div class="video-boxes container">
		<div>
			<div class="textbox">
				<h2>Alcantra Care</h2>
				<a href="https://www.youtube.com/watch?v=2YPdBv2Y2MM" data-lity>
					<img src="<?php echo $this->getThemePath(); ?>/img/play-icon.png"/>
				</a>
			</div>
		</div>
		<div>
			<div class="textbox">
				<h2>Satisfied Customers</h2>
				<a href="https://www.youtube.com/watch?v=vCdZlUAIR0A" data-lity>
					<img src="<?php echo $this->getThemePath(); ?>/img/play-icon.png"/>
				</a>
			</div>
		</div>
	</div>

</div>

<?php require('elements/footer.php'); ?>
