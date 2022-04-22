<?php
require_once(__DIR__ . "/../../../partials/nav.php");
is_logged_in(true);
if (isset($_POST["add"])) {
    //insert or update item in user's cart
}
if (isset($_POST["delete_one"])) {
    //delete single line item by Cart.id or Cart.product_id AND Cart.user_id
}
if (isset($_POST["delete_all"])) {
    //delete all user's cart (only the user's items)
}


//TODO create lookup query and fetch results, set them to $results
?>
<h1>Cart</h1>
<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table class="table">
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    <th>Actions</th>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
                <td>
                    <!-- other action buttons can go here-->
                    <form action="<?php echo get_url('order.php'); ?>" method=" POST">
                        <input type="submit" value="Buy Me" class="btn btn-info" />
                    </form>
                    <!-- TODO only show this if the user is admin -->
                    <a href="<?php echo get_url('admin/edit_product.php?id=') . se($record, "id"); ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>