<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

//TODO: Fetch purchase history as $results
?>
<h1>Purchase History</h1>
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
                    <a href="<?php echo get_url('product_details.php?id=') . se($record, "id"); ?>">Edit</a>
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
