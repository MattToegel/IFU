<?php
require_once(__DIR__ . "/../../../partials/nav.php");
is_logged_in(true);
?>
<h1>Order Confirmation</h1>
<?php
/*
Show the entire order details from the Order and OrderItems table (similar to cart)
Including a the cost of each line item and the total value
Show how they purchased and how much they paid
Displays a Thank you message

*/

?>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>