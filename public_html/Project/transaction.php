<?php
require_once(__DIR__ . "/../../../partials/nav.php");

//TODO get list of user's accounts for the dropdown(s)
//deposit/withdraw needs 1 dropdown
//transfer needs 2, but you can't transfer to the same account

if (isset($_REQUEST["type"])) {
    //get withdraw, deposit, transfer, etc
    $type = $_REQUEST["type"];
    if ($type === "withdraw") {
        //do withdraw
        //user account to world
    } else if ($type === "deposit") {
        //do deposit
        //world account to user
    } else if ($type === "transfer") {
        //do transfer
        //user account to other user account
    }
    //refresh both affected account balances
}
?>
<h1>Transaction (<?php se($_GET, "type", "Not set"); ?>)</h1>
<form method="POST">
    <select name="user_account">
        <?php foreach ($accounts as $account) : ?>
            <option value="<?php se($account, 'id'); ?>"><?php se($account, "account_number"); ?></option>
        <?php endforeach; ?>
    </select>
    <input type="number" name="change" />
    <input type="submit" value="Save" class="btn btn-info" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>