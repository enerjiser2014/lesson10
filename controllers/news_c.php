<?php

require_once  __DIR__ . '/../models/News_m.php';
require_once __DIR__ . '/../site_config.php';
require_once __DIR__ . '/../core/Dbclass.php';

$dbObj = new Dbclass(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
$siteNews = new News($dbObj);

require_once __DIR__ . '/../views/news_v.php';

?>