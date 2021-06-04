<?php

session_start();

$_SESSION["start"] = "ok";

header("location:../views/index.phtml");