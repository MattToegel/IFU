<?php
require_once(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    //die(header("Location: $BASE_PATH" . "home.php"));
    redirect("home.php");
}
//uses the fetched columns to map via input_map()
function map_column($col)
{
    global $columns;
    foreach ($columns as $c) {
        if ($c["Field"] === $col) {
            return input_map($c["Type"]);
        }
    }
    return "text";
}

$product_id = (int)se($_GET, "id", 0, false);
if (isset($_POST["submit"])) {
    //get form data
    //update Product record based on $product_id

}

//do lookup last
if ($product_id < 1) {
    flash("Missing product id in query params", "danger");
} else {
    //TODO lookup product and set $result variable
}
?>
<h1>Edit Product</h1>
<form method="POST">
    <?php foreach ($result as $column => $value) : ?>
        <?php /* Lazily ignoring fields via hardcoded array*/ ?>
        <?php if (!in_array($column, $ignore)) : ?>
            <div class="mb-4">
                <label class="form-label" for="<?php se($column); ?>"><?php se($column); ?></label>
                <input class="form-control" id="<?php se($column); ?>" type="<?php echo map_column($column); ?>" value="<?php se($value); ?>" name="<?php se($column); ?>" />
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <input class="btn btn-info" type="submit" value="Update" name="submit" />
</form>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>