<?php
require 'App/init_lib.php';
foreach (glob('function/*.php') as $data) {require $data;}
get_header("JC Boster");
?>
<div class="app">
	<?php get_header_box(); ?>
	<div class="container">
		<div class="row">
			<div class="col-2">
				<?php get_sidebar_php_library(); ?>
			</div>
			<div class="col-8">
				<div id="content">
					<h2># PHP Library</h2>
					PHP Library adalah kumpulan APIs library php project JC Boster
					<?php 
						echo $_Lib->terbilang(560000);
					?>
				</div>
				<?php get_footer_container(); ?>
			</div>
			<div class="col-2">
				
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>