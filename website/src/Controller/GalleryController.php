<?php
namespace jyangj\Controller;


use jyangj\SimpleTemplateEngine;

class GalleryController {
	private $template;
	private $path = __DIR__ . "/../../web/upload/";
	
	public function __construct(SimpleTemplateEngine $template){
		$this->template = $template;	
	}
	public function showUpload()
	{
		echo $this->template->render("show_upload.php", [
			"images" => $this->listFiles()
		]);
	}
	
	public function upload()
	{
		
		move_uploaded_file(
			$_FILES["file"]["tmp_name"], 
			$this->path . uniqid() . ".jpg"
				
		);
		var_dump($_FILES); die();
		
	}
	
	private function listFiles()
	{
		$data = [];
		foreach(glob($this->path . "*") as $file) {
			$data[] = basename($file);
		}
		return $data;
		
	}
}