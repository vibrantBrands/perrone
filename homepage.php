<?php require('elements/header.php'); ?>

<?php require('elements/navigation.php'); ?>

	
	<?php 	
		  $bt = BlockType::getByHandle('autonav');
		  $bt->controller->displayPages = 'second_level'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
		  $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
		  $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
		  $bt->controller->displaySubPages = 'relevant';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
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
					<p>"In evaluating product choices for upgrading seat-covers on our short haul fleet, Aer Lingus reviewed several options across the market and determined that Perrone’s EnduraLite was the optimum choice based on weight and strength characteristics, design and colour options available, and the quality of the experience for passengers. Perrone was able to provide an integrated solution in terms of design, manufacture, certification, and support for fitting of the seat-covers; all of which was achieved flexibly and within challenging timelines."</p><br />
					— Michael Gannon, Director Product & Brand, <strong>Aer Lingus</strong> 
				</div>
				<div>
					<p>"After completing a review of the total cost of ownership, which included reviewing side by side performance test results, the cost of material, expected life, ongoing maintenance and cleaning costs, Air Wisconsin selected Perrone’s EnduraLite. This product met our requirements of reducing operating costs associated with passenger seat cover maintenance and out of service time, reduction in space inventory and weight savings. Air Wisconsin anticipates several more years of service life with our existing EnduraLite covers. For operators who may be considering a light weight, durable and low maintenance seat cover material option, we would strongly recommend Perrone’s EnduraLite synthetic leather."</p><br />
					— Janet Huculak, Vice President – Maintenance & Procurement
<strong>Air Wisconsin Airline Corporation</strong>
				</div>
				<div>
					<p>"Geven has worked with Perrone Aerospace as a trusted supplier for many years. Perrone has consistently supplied us with exceptional customer service as well as products which allow us to provide our customers with refreshed cabin environments and considerable weight savings. We view Perrone Aerospace as a valued partner with shared corporate values and look forward to continuing this relationship into the future."</p><br />
					— Rodolfo Baldascino, Marketing & Sales Manager, <strong>Geven</strong>
				</div>
			</div>
		</div>
	</div>

<?php require('elements/footer.php'); ?>
