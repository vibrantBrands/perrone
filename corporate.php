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

	<div class="content homepage corporate">
		<div class="hero-wrapper">
			<div class="textbox">
				<h1>Experience the richness of performance leather</h1>
			</div>
			<div class="image-slider">
			<div>
				<div class="inner">
					<p>Alcantara</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/heroes/corporate/gennaio.jpg" class="product-pic" />
					<a href="/corporate/alcantara">
						<div class="product-cta">
								<div class="text">View this product</div>
						</div>
						</a>
				</div>
			</div>
			<div>
				<div class="inner">
					<p>Marquis</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/heroes/corporate/marquis.jpg" class="product-pic"/>
					<a href="/corporate/monulite/marquis">
						<div class="product-cta">
							<div class="text">View this product</div>
						</div>
					</a>
				</div>
			</div>
			<div>
				<div class="inner">
					<p>Noble</p>
					<img src="<?php echo $this->getThemePath(); ?>/img/heroes/corporate/noble.png" class="product-pic"/>
					<a href="/corporate/genuine-leather/noble">
						<div class="product-cta">
							<div class="text">View this product</div>
						</div>
						</a>
				</div>
			</div>
		</div>
			
		</div>
		<!-- end image slider -->

		<div class="container">
			<div class="opening-text">
				<div>Providing the highest level of quality & customization</div>
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/divider.png" class="divider" />
				</div>
				<div>You have full control of your environment. Our bespoke options of leather and textiles are certain to produce the complete custom, one of a kind interior you desire.
	 			</div>
			</div>
		</div>
		<div class="container products">
			<a href="/corporate/genuine-leather">
				<div>
					Genuine Leather
				</div>
			</a>
			<a href="/corporate/alcantara">
				<div>
					Alcantara
				</div>
			</a>
		</div>
		<div class="container products services">
			<a href="/corporate/monulite">
				<div>
					Monulite
				</div>
			</a>
			<a href="/corporate/corporate-customization">
				<div>
					Customization
				</div>
			</a>
		</div>
		<div class="video">
			<a href="https://www.youtube.com/watch?v=9HxJBbKO2Ow" data-lity>
				<div class="container">
					<div class="video-box">
						<div class="video-cta">
							<img src="<?php echo $this->getThemePath(); ?>/img/play-icon.png" alt="video thumb">
							<p>Corporate<br />
							<span>&</span>VIP</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="container testimonials">
			<h2>Testimonials</h2>
			<div class="scroller">
				<div>
					<p>"In evaluating product choices for upgrading seat-covers on our short haul fleet, Aer Lingus reviewed several options across the market and determined that Perrone’s EnduraLite was the optimum choice based on weight and strength characteristics, design and colour options available, and the quality of the experience for passengers. Perrone was able to provide an integrated solution in terms of design, manufacture, certification, and support for fitting of the seat-covers; all of which was achieved flexibly and within challenging timelines."</p><br />
					— Michael Gannon, Director Product & Brand<br /><strong>Aer Lingus</strong>
				</div>
				<div>
					<p>"After completing a review of the total cost of ownership, which included reviewing side by side performance test results, the cost of material, expected life, ongoing maintenance and cleaning costs, Air Wisconsin selected Perrone’s EnduraLite. This product met our requirements of reducing operating costs associated with passenger seat cover maintenance and out of service time, reduction in space inventory and weight savings. Air Wisconsin anticipates several more years of service life with our existing EnduraLite covers. For operators who may be considering a light weight, durable and low maintenance seat cover material option, we would strongly recommend Perrone’s EnduraLite synthetic leather."</p><br />
					— Janet Huculak, Vice President – Maintenance & Procurement<br /> <strong>Air Wisconsin Airline Corporation</strong>
				</div>
				<div>
					<p>"Geven has worked with Perrone Aerospace as a trusted supplier for many years. Perrone has consistently supplied us with exceptional customer service as well as products which allow us to provide our customers with refreshed cabin environments and considerable weight savings. We view Perrone Aerospace as a valued partner with shared corporate values and look forward to continuing this relationship into the future."</p><br />
					— Rodolfo Baldascino, Marketing & Sales Manager<br /><strong>Geven</strong>
				</div>
			</div>
		</div>
	</div>

<?php require('elements/footer.php'); ?>
