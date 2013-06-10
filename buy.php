<?php
//print_r($_GET); errors for some reason atm

//$qty = $_GET['qty'];
//$pids = $_GET['pid'];

//print_r($qty); errors
//print_r($pids); errors

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$credit = $_POST['credit'];
$order = $_POST['order'];

//Process some of the order here

/*$form = <<<END_OF_FORM
<form method="post" action="buy.php?">
    Name: <input type="text" name="name" /><br/>
    Address: <input type="address" name="address" /><br/>
    Order: <input type="textarea" name="order" /><br/>
    <input type="submit" name="submit" value="Submit Order" />
</form>
END_OF_FORM;

echo json_encode($form);*/

if(isset($_POST['submit'])){
  mail( "dougthomson82@gmail.com", "Order.",
  "New order from $name.
      $order
      $address
      $phone
      $credit",
  "From: order@momandpopspizza.com\r\n");
};

echo "<html><body><h1>Your order has been submitted!</h1></body></html>";


