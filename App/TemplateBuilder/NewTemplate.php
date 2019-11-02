<?php
class NewTemplate {
	public 	$projectPath  	= "project/template",
			$masterPath		= "_data_master",

			$name, 
			$message,
			$pageLayout;

	public function __construct($data) {
		$this->name 		= $data["template_name"];
		$this->pageLayout 	= $data["layout"];

	}

	protected function createDir($dir) {
		$createDir = mkdir($dir);
		if ($createDir == true) {
			$this->createNewTemplate();
		}
		else {
			return ["code" => 0, "message" => "Gagal Membuat Directory!"];
		}
	}

	private function extractMaster() {
		$zip = new ZipArchive;
		$res = $zip->open($this->masterPath . "/src.zip" );

		if ($res === TRUE) {
			$zip->extractTo($this->projectPath. "/" . $this->name);
			$zip->close();
			$layout = file_get_contents($this->masterPath . "/" . $this->pageLayout);

			file_put_contents($this->projectPath. "/" . $this->name . '/index.php', $layout);

			$this->message = ["code" => 1, "message" => "New Template Sukses!"];
		} 
		else {
			$this->message = ["code" => 0, "message" => "New Template Gagal!"];
		}
	}

	public function createNewTemplate() {
		if ( file_exists($this->projectPath) ) {
			if (file_exists($this->projectPath . "/" . $this->name)) {
				if ( count( glob($this->projectPath . "/" . $this->name . "/*") ) > 0 ) {
					$this->message = ["code" => 0, "message" => "Template Sudah Ada!"];	
				}
				else {
					$this->extractMaster();
					if (!is_null($this->message)) {
						return $this->message;
					}
				}
			}
			else {
				$this->createDir($this->projectPath . "/" . $this->name);
			}
		}
		else {
			$this->createDir($this->projectPath);
		}
	}
}