<?php
require_once __DIR__ . '/../models/News.php';
require_once __DIR__ . '/../core/Dbclass.php';
require_once __DIR__ . '/site_config.php';

$title = $_POST['title'];
$text = $_POST['text'];
$date = date('Y-m-d');
if (!empty($_POST)) {
    // + добавить проверку того что внутри $title, $text перед отправкой в фунцию
    $dbObj = new Dbclass(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
    $siteNews = new News($dbObj);
    $siteNews->addNews($title,$text,$date);
}
header('Location:' . '../controllers/News.php')
?>