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
					<h2># JC Boster</h2>
					<p>
						Project Web Boster Component oke kalautttttttttt
					</p>
				</div>
				<?php get_footer_container(); ?>
			</div>
			<div class="col-2">
				
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>