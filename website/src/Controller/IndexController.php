<?php

namespace jyangj\Controller;

use jyangj\SimpleTemplateEngine;

class IndexController 
{
  /**
   * @var ihrname\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  
  /**
   * @param ihrname\SimpleTemplateEngine
   */
  public function __construct(SimpleTemplateEngine $template)
  {
     $this->template = $template;
  }

  public function homepage() {
  	echo $this->template->render("index.html.php");    
  }
  
  public function greet($name) {
  	echo $this->template->render("hello.html.php", ["name" => $name]);
  }
  public function gallery(){
  	echo $this->template->render("gallery.html.php");
  }
  public function gallery2(){
  	echo $this->template->render("gallery2.html.php");
  }
}
