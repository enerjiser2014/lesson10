<?php

require_once __DIR__ . '/../core/Dbclass.php';
require_once __DIR__ . '/../core/Article.php';


class News extends Article
{
    protected $source;
    protected $preview;

    public function __construct($dbhost, $dbname, $dbuser, $dbpassword)
    {
        $this->connect($dbhost, $dbname, $dbuser, $dbpassword);
    }

    public function getArticle()
    {
        $this->getArticle();
    }

    public function getNews()
    {
        $sql = 'SELECT * FROM news ORDER BY date DESC';
        return $this->getRecords($sql); //возвращает массив статей.
    }

    public function GetNewsById($id)
    {
        $sql = 'SELECT * FROM news WHERE id=' . $id;
        return $this->getRecords($sql)[0];
    }

}


?>
