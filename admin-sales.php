<?php
namespace Hcode\Model;

use \Hcode\Model;
use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\Model\Address;

$app->get("/admin/delivery-settings", function() {
	User::verifyLogin();
	  $address = new Address();

 
  if(isset($_GET['zipcode'])) {   
    $address->loadFromCEP($_GET['zipcode']);
   
  }
  if(!$address->getdesaddress()) $address->setdesaddress('');
  if (!$address->getdesnumber()) $address->setdesnumber('');
  if(!$address->getdescomplement()) $address->setdescomplement('');
  if(!$address->getdesdistrict()) $address->setdesdistrict('');
  if(!$address->getdescity()) $address->setdescity('');
  if(!$address->getdesstate()) $address->setdesstate('');
  if(!$address->getdescountry()) $address->setdescountry('');
  if(!$address->getdeszipcode()) $address->setdeszipcode('');

    $page = new PageAdmin();
	$page->setTpl("delivery-settings", [
		'address'=>$address->getValues(),
		'error'=>Address::getMsgError()
	]); 
	
});

$app->get('/admin/delivery-methods', function() { 
	User::verifyLogin(); 
	$page = new PageAdmin();
	$page->setTpl("delivery-methods");
});

?>