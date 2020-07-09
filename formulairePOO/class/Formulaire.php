<?php 
/**
 *  Ceci est une classe pour generer des formulaire
 */
class Formulaire
{

	private $action;
	private $method;
	
	function __construct($action, $method)
	{
		$this->action = $action;
		$this->method = $method;
		
	}

	public function getAction(){
		return $this->action;
	}
	public function setAction($newAction){
		$this->action  = $newAction;
	}

	public function getMethod(){
		return $this->method;
	}
	public function setMethod($newMethod){
		$this->method  = $newMethod;
	}


	public function label($name){
		echo "<label for=\"$name\" class=\"form-label\">$name</label>";
	}

	public function input($type, $name){
		echo "<input type=\"$type\" class=\"form-control\" name=\"$name\"></label>";
	}

	public function button($type, $name, $css){
		echo "<button type=\"$type\" class=\"btn $css\"> $name</button>";
	}

	public function header(){
		return "<form action=".$this->getAction()." method=".$this->getMethod().">";
	}

	public function footer(){

		return "</form>";
	}



}