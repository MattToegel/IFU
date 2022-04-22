<?php
require(__DIR__ . "/../../partials/nav.php");
if (isset($_POST["deposit"])) {
    //insert into Accounts user_id, null account number, account_type
    //left pad last insert id to make an accont number
    //update the account number for this record by the account id
    //do transaction for deposit
    //refresh account balance
}
?>
<div class="container-fluid">
    <h1>Create Account</h1>
    <form method="POST">
        <select name="account_type">
            <!-- TODO -->
        </select>
        <input type="number" name="deposit" />
        <input type="submit" class="btn btn-info" value="Open Account" />
    </form>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>