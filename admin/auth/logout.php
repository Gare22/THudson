<?php
require_once('config.php');
session_start();
session_destroy();

header("Location:".__ROOT__.'/admin/index.php'); exit;