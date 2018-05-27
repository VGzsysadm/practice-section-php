<?php
    $site = isset($_GET['id']) ? strtolower($_GET['id']) : '../index';
    require_once 'sections/htmlhead.php';
    require_once 'content/' . $site . '.php';
    require_once 'sections/htmlfooter.php';