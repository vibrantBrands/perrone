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
		    $a = new Area('Customization Text');
		    $a->display($c);
	?>

		<div class="customization-wrapper">
			<div class="specs">
				<div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Printing.svg" alt="Printing" />
						<div>
							<p><strong>Printing</strong></p>
							<p>Printing using the latest printing technology, we are building a new world of materials offering unique aesthetics and performance properties.</p> 
							<p>Unlocking the power of color, our printed materials represent a fundamentally new approach to branding and open a world of creative possibilities.</p>
						</div>
						
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Deboss.svg" alt="Debossing" />
						<div>
							<p><strong>Debossing</strong></p>
							Debossing enhances the appearance of products by adding 3-D depth. With debossing the material is pushed inward through the use of heat, pressure and time. Debossing your product allows for custom logos and the use of foils. The embossed products are further processed into finished goods and are quality control inspected.
						</div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Gaufrage.svg" alt="Gaufrage" />
						<div>
							<p><strong>Gaufrage</strong></p>
							Gaufrage Placeholder text. We need to find the actual content for this section. It was mentioned in the content doc that we should use existing content but I don’t see where this is mentioned on the existing site. 
						</div>

					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Antimacassar.svg" alt="Antimacassar" />
						<div>
							<p><strong>Antimcassars</strong></p>
							Antimacassars  We supply ready to install, leather antimacassars in a variety of designs, providing a cost-effective, all in one branding solution.

							<ul>
								<li>Compliant with airworthiness requirements</li>
								<li>Will design, cut, and sew according to your specifications</li>
								<li>Stitching, logos, printing, embossing, debossing, and embroidery</li>
							</ul>
						</div>

					</div>
				</div>
				<div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/Emboss.svg" alt="Embossing" />
						<div>
							<p><strong>Embossing</strong></p>
							Embossing is a highly decorative technique. It raises surfaces to transform ordinary, flat and lifeless material into uniquely contoured, 3-Dimensional raised patterns. A special backing material will hold the shape of the embossing for the life of the product. Embossing your product allows for custom logos and the use of foils. The embossed products are further processed into finished goods and are quality control inspected.
						</div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/FoilStamp.svg" alt="Noise" />
						<div>
							<p><strong>Foil Stamping</strong></p>
							Foil Stamping is the application of foil, a special film backed material applied through the use of heat, time, and pressure. The film is applied in the shape of the dye being used. Foil stamping is an ideal way to add a touch of elegance and class to your finished product. Perrone Aerospace uses the following types of foils.

							<ul>
								<li>Gloss Foil: transparent and glossy in appearance</li>
								<li>Metallic Foil: Metallicized aluminum foils available in many colors with either a shiny or satin finish</li>
								<li>Pattern Foils: foils manufactured with specific patterns rather than flat colors</li>
								<li>Pearlescent Foils: similar to gloss foils but with a translucent color</li>
								<li>Pigment Foil: Opaque foils of intense color resembling glossy enamel foils</li>
								<li>Available in either gloss or matte finish</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="chrome-free">
						<img src="<?php echo $this->getThemePath(); ?>/img/icons/chrome-free.svg" alt="Chrome Free" />
					<div>
						<p>Chrome-Free  Perrone Aerospace is committed to using safe and friendly products and providing services in the most environmentally safe and efficient manner through detailed analysis of life cycle assessments.</p>

						<p>Products and services comply with ISO 14001:2004 Environmental Management Standard which includes emphasis with compliance to regulatory and other requirements.</p>

						<p>Chrome-free genuine leather is manufactured by wet white tanning. This refers to leather with a pale cream or white color. This method of tanning has increased in popularity partially due to environmental concerns. A wide variety of leathers can be produced using the wet white system, including automotive and upholstery leathers.</p>
						
						<p>Chrome-free leather is environmentally sensitive. Many countries have been using chemicals including Formaldehyde and heavy metals. Since 1992, use of azo-amine contained dyestuffs has been banned for the products in direct contact with skin.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container chrome-free">
		


			
 
		</div>	
	</div>

</div>

<?php require('elements/footer.php'); ?>
