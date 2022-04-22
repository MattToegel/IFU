<?php
require_once(__DIR__ . "/../../../partials/nav.php");
//do lookup last
if ($product_id < 1) {
    flash("Missing product id in query params", "danger");
} else {
    //TODO lookup product and set $result variable
}
?>

<?php foreach ($result as $column => $value) : ?>
    <?php /* Lazily ignoring fields via hardcoded array*/ ?>
    <?php if (!in_array($column, $ignore)) : ?>
        <div class="mb-4">
            <div><?php se($column); ?></div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>