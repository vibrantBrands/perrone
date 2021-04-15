<?php require('elements/header.php'); ?>

<?php require('elements/navigation_blue.php'); ?>

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

<div class="content blue-theme">
	<?php
        $a = new Area('Header');
        $a->display($c);
    ?>

	<div class="container">
    	<div class="news">
	    	<div class="blogfeed">
	    		<h2><i class="far fa-newspaper"></i> Latest News</h2>
				<?php
			        $a = new Area('Blog Feed');
			        $a->display($c);
			     ?>
	     	</div>
	     	<div class="events">
	     		<h2><i class="far fa-calendar"></i> Upcoming Events</h2>
	     		<div class="wrapper">
	     			<?php
			        	$a = new Area('Events Feed');
			        	$a->display($c);
			     	?>
	     		</div>
	     		<h2><i class="fas fa-at"></i> Social Media</h2>
	     		
	     		<div class="wrapper">
	     			<div class="commonninja_component" comp-type="feed" comp-id="780c8b16-4b3d-471b-ab19-3b5e9359bb83"></div>
	     		</div>
				
	     	</div>
    	</div>
	</div>
</div>

<?php require('elements/footer_blue.php'); ?>
