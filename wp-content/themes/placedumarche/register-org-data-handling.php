<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  
  
  // org name
  $name = htmlspecialchars($_POST['reg-org-name']);
  // org address fields
  $shipAddress = htmlspecialchars($_POST['reg-ship-address']);
  $address2 = htmlspecialchars($_POST['reg-address2']);
  $locality = htmlspecialchars($_POST['reg-locality']);
  $postcode = htmlspecialchars($_POST['reg-postcode']);


  echo  $name, ' ', $shipAddress;
?>