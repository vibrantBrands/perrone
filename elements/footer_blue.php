<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer class="blue">
	<div class="container">
		<div>
			<?php
                $a = new GlobalArea('Footer Left');
                 $a->display($c);
             ?>  
		</div>
		<div>
			<?php
                	$a = new GlobalArea('Footer Middle');
                 	$a->display($c);
             	?>  
			<!-- <div>
				<p><strong>Your contacts for<br /> more information</strong></p>
			</div>
			<div class="inner">
				
			</div>  -->
		</div>
		<div>
			<?php
                $a = new GlobalArea('Footer Right');
                 $a->display($c);
             ?>  
		</div>
	</div>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>
