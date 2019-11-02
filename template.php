<?php
require 'App/init_templateBuilder.php';
foreach (glob('function/*.php') as $data) {require $data;}
get_header("Template");
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
					<div class="row">
						<div class="col-12">
							<button class="btn btn-primary modal-toggle" target="#newTemplate"><i class="fas fa-plus" style="color:#fff"></i> New Template</button>
							<?php  
								if (isset($_POST["create"])) {
									$newTemp 	= new NewTemplate($_POST);
									$getNew 	= $newTemp->createNewTemplate();
									$res 		= $newTemp->message;
									if ( $res["code"] == 1 ) {
										echo '
											<script>
												jc_alertDialog("'. $res["message"] .'", true);
												setTimeout(function() {refreshPage()}, 2000);
											</script>
										';	
									}
									else {
										echo '
											<script>
												jc_alertDialog("'. $res["message"] .'", false);
											</script>
										';
									}
								}
								function deleteDirectory($dirPath) {
									if (is_dir($dirPath)) {
										$objects = scandir($dirPath);
										foreach ($objects as $object) {
											if ($object != "." && $object !="..") {
												if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
													deleteDirectory($dirPath . DIRECTORY_SEPARATOR . $object);
												} else {
													unlink($dirPath . DIRECTORY_SEPARATOR . $object);
												}
											}
										}
										reset($objects);
										rmdir($dirPath);
										if (file_exists($dirPath)) {
											return false;
										}
										else {
											return true;
										}
									}
								}

								if (isset($_POST["remove"])) {
									$path = $_POST["path"];

									if (file_exists($path)) {
										$set = deleteDirectory($path);
										if ($set == true) {
											echo '
												<script>
													jc_alertDialog("Sukses Delete Template", true);
													setTimeout(function() {refreshPage()}, 2000);
												</script>
											';	
										}
										else {
											echo '
												<script>
													jc_alertDialog("Delete Gagal!", false);
												</script>
											';	
										}
									}
									else {
										echo '
											<script>
												jc_alertDialog("File Tidak Ada!", false);
											</script>
										';	
									}
									
								}

							?>
							<div class="modal" modal-width="500px" id="newTemplate" tabindex="-1">
								<div class="modal-block">
									<div class="modal-content">
										<div class="box-content">
											<div class="box-header">
												<i class="fas fa-plus"></i> New Template
												<div class="close-box modal-toggle" target="#newTemplate">
													<i class="fas fa-times"></i>
												</div>
											</div>
											<div class="box-body">
												<form action="" method="post">
													<div class="form-group">
														<label for="template_name">Nama Project</label>
														<input type="text" class="input-control" id="template_name" name="template_name" placeholder="Project Name">
														<smal class="input-help"><i>*Nama Template</i></smal>
													</div>
													<div class="form-group">
														<label for="layout">Layout Columns</label>
														<select class="input-control" id="layout" name="layout">
															<option value="page_sidebar_right.php">Sidebar Right</option>
															<option value="page_sidebar_left.php">Sidebar Left</option>
															<option value="page_sidebar_lr.php">Sidebar LR</option>
														</select>
													</div>
													<button class="btn btn-info" name="create">Buat</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-12">
							<div class="box-content">
								<div class="box-header">
									<i class="fas fa-list"></i> Template List
								</div>
								<div class="box-body">
									<div class="template-list">
										<?php
											$path 			= "project/template/";
											$getTemplate 	= glob($path . "*");
										?>
										<?php foreach ($getTemplate as $temp) : ?>
											<?php  
												$tempName = explode("/", $temp);
											?>
											<div class="template-item">
												<a href="<?=$temp;?>" class="template-url" target="_blank" style="display: block;"><i class="fas fa-folder"></i> <?= end($tempName); ?></a>	
												<form action="" method="post">
													<input type="hidden" name="path" value="<?=$temp;?>">
													<button style="padding: 5px 10px;" name="remove"><i class="fas fa-trash"></i></button>			
												</form>
											</div>
										<?php endforeach; ?>
									</div>
									<?php if (count($getTemplate) == 0) : ?>
										<div class="note note-warning">
											# Tidak Ada Data..
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php get_footer_container(); ?>
			</div>
			<div class="col-2">
				
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>