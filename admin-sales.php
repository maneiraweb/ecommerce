<?php
namespace Hcode\Model;

use \Hcode\Model;
use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\Model\Delivery;

$app->get("/admin/delivery-settings", function() {
	User::verifyLogin();
	$delivery = Delivery::listAll();
	$pais = Delivery::pais();
	$page = new PageAdmin();
	$page->setTpl("delivery-settings", [
		"delivery"=>$delivery,
		"pais"=>$pais
	]); 
 	/*var_dump($delivery);
 	exit();
 	*/
});

?>