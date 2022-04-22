<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Game</h1>
    <div class="lead text-center mb-3">
        The Canvas
    </div>
</div>
<script>
    function save_score(score) {
        fetch("api/save_score.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `score=${score}`
            }).then(resp => resp.json)
            .then(data => {
                flash(JSON.stringify(data));
            })
    }
</script>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>