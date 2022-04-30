<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
if (isset($_POST["purchase"])) {
    /*

Calculate Cart Items
Verify the current product price against the Products table
Since our Cart is table-based it can be long lived so if a user added a Product at a sale and they attempt to purchase afterwards, it should pull the true Product cost.
You can also show the Cart.unit_price vs Product.unit_price to show a sale or an increase in price
Verify desired product and desired quantity are still available in the Products table
Users can’t purchase more than what’s in stock
Show an error message and prevent order from going through if something isn’t available
Let the user update their cart and try again
Clearly show what the issue is (which product isn’t available, how much quantity is available if the cart exceeds it)
Make an entry into the Orders table
Get last Order ID from Orders table
Copy the cart details into the OrderItems tables with the Order ID from the previous step
Update the Products table Stock for each item to deduct the Ordered Quantity
Clear out the user’s cart after successful order
Redirect user to Order Confirmation Page

    */
}
?>
<h1>Order Page</h1>
<form method="POST">
    <input type="number" name="payment" />
    <input type="submit" value="Complete Purchase" class="btn btn-info" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
