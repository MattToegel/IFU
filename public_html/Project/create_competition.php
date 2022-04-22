<?php
require(__DIR__ . "/../../partials/nav.php");


if (isset($_POST["submit"])) {
    //TODO handle form submit
}
//TODO handle how you build the form
?>
<div class="container-fluid">
    <h1>Create Competition</h1>
    <form method="POST">
        <?php foreach ($columns as $index => $column) : ?>

            <div class="mb-4">
                <label class="form-label" for="<?php se($column, "Field"); ?>"><?php se($column, "Field"); ?></label>
                <input class="form-control" id="<?php se($column, "Field"); ?>" type="<?php echo input_map(se($column, "Type", "", false)); ?>" name="<?php se($column, "Field"); ?>" />
            </div>
        <?php endforeach; ?>
        <input class="btn btn-primary" type="submit" value="Create" name="submit" />
    </form>
</div>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
