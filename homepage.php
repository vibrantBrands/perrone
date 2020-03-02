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

	<div class="content">
		<div class="image-slider">
			<div>
				<div class="inner">
					<h1>Experience the richness of performance leather</h1>
					<p>Noble</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/noble-brown.png" class="product-pic" />
					<a href="http://www.google.com">
						<div class="product-cta">
							<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
							<div class="text">View this product</div>
						</div>
					</a>
				</div>
			</div>
			<div>
				<div class="inner">
					<h1>Experience the richness of performance leather</h1>
					<p>Noble</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/noble-brown.png" class="product-pic"/>
					<a href="http://www.google.com">
						<div class="product-cta">
							<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
							<div class="text">View this product</div>
						</div>
					</a>
				</div>
			</div>
			<div>
				<div class="inner">
					<h1>Experience the richness of performance leather</h1>
					<p>Noble</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/noble-brown.png" class="product-pic"/>
					<a href="http://www.google.com">
						<div class="product-cta">
							<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
							<div class="text">View this product</div>
						</div>
					</a>
				</div>
			</div>
			<div>
				<div class="inner">
					<h1>Experience the richness of performance leather</h1>
					<p>Noble</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/noble-brown.png" class="product-pic"/>
					<a href="http://www.google.com">
						<div class="product-cta">
							<img src="<?php echo $this->getThemePath(); ?>/img/seek.png" alt="view product" class="seek">
							<div class="text">View this product</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="opening-text">
				<div>Providing the highest level<br /> of quality & customization</div>
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/divider.png" alt="divider">
				</div>
				<div>You have full control of your environment. Our bespoke options of leather and textiles are certain to produce the complete custom, one of a kind interior you desire.
	 			</div>
			</div>
		</div>
		<div class="container products">
			<div>
				Genuiune Leather
			</div>
			<div>
				Vinyl
			</div>
		</div>
		<div class="container customization">
			<div>
				Customization
			</div>
		</div>
		<div class="video">
			<div class="container">
				<a href="https://www.youtube.com/watch?v=9HxJBbKO2Ow" data-lity><img src="<?php echo $this->getThemePath(); ?>/img/video-thumb.png" alt="video thumb"></a>
			</div>
		</div>
		<div class="container testimonials">
			<h1>Testimonials</h1>
			<div class="scroller">
				<div>
					<p>The speed at which Perrone operates is unparalleled. Because of their ability to adapt to our needs we finished outfitting our jets with custom material a week ahead of schedule. You just can’t get this level of service anywhere else.</p><br />
					— CEO, <strong>Fortune 500 Company</strong> 
				</div>
				<div>
					<p>The speed at which Perrone operates is unparalleled. Because of their ability to adapt to our needs we finished outfitting our jets with custom material a week ahead of schedule. You just can’t get this level of service anywhere else.</p><br />
					— CEO, <strong>Fortune 500 Company</strong> 
				</div>
				<div>
					<p>The speed at which Perrone operates is unparalleled. Because of their ability to adapt to our needs we finished outfitting our jets with custom material a week ahead of schedule. You just can’t get this level of service anywhere else.</p><br />
					— CEO, <strong>Fortune 500 Company</strong> 
				</div>
			</div>
		</div>
	</div>

<?php require('elements/footer.php'); ?>
