<?php
require 'App/init_lib.php';
foreach (glob('function/*.php') as $data) {require $data;}
get_header("Title Page");
?>
<div class="app">
	<?php get_header_box(); ?>
	<div class="container">
		<div class="row">
			<div class="col-10">
				<div id="content">
					kontent...
				</div>
				<?php get_footer_container(); ?>
			</div>
			<div class="col-2">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>