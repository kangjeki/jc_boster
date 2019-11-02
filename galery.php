<?php  
foreach (glob('function/*.php') as $data) {require $data;}
get_header("JC Boster");
?>
<div class="app">
	<?php get_header_box(); ?>
	<div class="container">
		<div class="row">
			<div class="col-2">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-8">
				<div id="content">
					<?php  
						$_dirGalery = glob("galery/*");
						
					?>
					<?php foreach($_dirGalery as $galery) : ?>
						<?php  
							$nameDir 	= explode("/", $galery);
						?>
						<a href="<?= $galery; ?>" target="_blank" style="display: block; margin-bottom: 10px;"><i class="fas fa-external-link-alt"></i> <?= end($nameDir); ?></a>
					<?php endforeach; ?>
				</div>
				<?php get_footer_container(); ?>
			</div>
			<div class="col-2">
				
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>