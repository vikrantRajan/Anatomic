<?php
// start session here because we can't start a session after outputting
session_start();

include("../../AnatomicDB/ConnectToDB.php");
include("controllers/Controller.php");
include("models/Model.php");
include("models/Specimens.php");
include("controllers/Pages.php");
include("controllers/User.php");

// Might want to check if controller/ action exists....
/// This is to check if we posted controller and action from the checkout form
if (isset($_POST["controller"]))
{
	$_GET["controller"] = $_POST["controller"];
}

if (isset($_POST["action"]))
{
	$_GET["action"] = $_POST["action"];
}

$controller = (!empty($_GET["controller"])) ? $_GET["controller"] : "pages";
$action = (!empty($_GET["action"])) ? $_GET["action"] : "main";



// creating a controller object dynamically be $controller variable Pages();
$controller = ucfirst($controller); // upper case first character of class name
$oCon = new $controller();

if (method_exists($oCon, $action))
{
	$oCon->$action();
} else {
	echo "action $action not found in $controller";
	die;
}
?>