<?php
require_once(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    //die(header("Location: $BASE_PATH" . "home.php"));
    redirect("home.php");
}
if (isset($_POST["add"])) {
    //TODO get data and insert into Products table
}
?>
<h1>Add Product</h1>
<form method="POST">
    <div>TODO - add fields</div>
    <input type="submit" value="Add Product" class="btn btn-info" />
</form>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>