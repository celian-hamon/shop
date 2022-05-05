<?php


$today = getOrder(date('Y-m-d'));
$yesterday = getOrder(date('Y-m-d', strtotime('-1 day')));

require_once './views/admin_view.php';
