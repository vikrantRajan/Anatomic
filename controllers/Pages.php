<?php

Class Pages extends Controller {

	public function __construct()
	{}

	public function main()
	{
			$this->mainbody .= $this->loadView("UserLogin");	
			// $this->mainbody .= $this->loadView("UserRegistration");
			include("views/Templatelogin.php");
	}


	public function dashboard()
	{
		if(isset($_SESSION['user_name']) &&  isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) 
		{
			$this->nav = $this->loadView("Header");
			$this->mainbody .= $this->loadView("Overview");
			$this->mainbody .= $this->loadView("SpecimenList");
			include("views/Template.php");
		} else if(isset($_GET['logout'])) {
			if($_GET['logout'] = true) {
				header("Location: index.php?logout=true");
			}
		} else {
			header("Location: index.php?error=true");
			
		}
	}

	public function registerUser() {
		
		$this->nav = $this->loadView("Header");
		$this->mainbody .= $this->loadView("Register");	
		include("views/Template.php");
	}




}

?>