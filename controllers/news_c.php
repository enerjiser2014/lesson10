<?php

require_once  __DIR__ . '/../models/News_m.php';
require_once __DIR__ . '/../site_config.php';

$sitenews = new News(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);

require_once __DIR__ . '/../views/news_v.php';

?>