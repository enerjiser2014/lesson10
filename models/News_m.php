<?php

require_once __DIR__ . '/../core/Dbclass.php';
require_once __DIR__ . '/../core/Article.php';


class News extends Article
{
    protected $dbObject;
    protected $source;
    protected $preview;

    public function __construct($dbObject)
    {
        $this->dbObject = $dbObject;

    }

    public function getArticle()
    {
        $this->dbObject->getArticle();
    }

    public function getNews()
    {
        $sql = 'SELECT * FROM news ORDER BY date DESC';
        return $this->dbObject->getRecords($sql); //возвращает массив статей.
    }

    public function GetNewsById($id)
    {
        $sql = 'SELECT * FROM news WHERE id=' . $id;
        return $this->dbObject->getRecords($sql)[0];
    }

    public function addNews($title, $text, $date)
    {
        $sql = <<<QUERY
        INSERT INTO news (text, title, date) VALUES ('{$text}', '{$title}', '{$date}')
QUERY;
        return $this->dbObject->sqlExec($sql);
    }

}


?>
