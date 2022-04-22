<?php
require(__DIR__ . "/../lib/functions.php");
//die(header("Location: $BASE_PATH/login.php"));
session_start();
flash("¯\_(ツ)_/¯", "info");
redirect("/Project/index.php");
