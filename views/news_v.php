<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h1>Новости сайта</h1>
<?php
foreach ($sitenews->getNews() as $article): ?>
    <div class="article">
        <h3><?php echo $article['title'] . ' ' . $article['date']; ?></h3>
        <?php echo $article['text']; ?>
    </div>
<?php
endforeach; ?>
<a href="../views/addnews.php">Добавить новость</a>
</body>
</html>