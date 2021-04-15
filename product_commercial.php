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

<div class="content blue-theme product">
	<?php
	    $a = new Area('Page Header');
	    $a->display($c);
	?>

	<div class="container">
		
		<div class="product-images">
				<?php
			    $a = new Area('Product Images');
			    $a->display($c);
			?>
			</div>
		<div class="product-name">
			<?php
			    $a = new Area('Product Name');
			    $a->display($c);
			?>
		</div>
	</div>

	<div class="container description">
		<?php
		    $a = new Area('Product Description');
		    $a->display($c);
		?>
	</div>
</div>

<?php require('elements/footer_blue.php'); ?>
