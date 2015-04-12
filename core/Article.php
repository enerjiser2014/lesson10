<?php

abstract class Article extends Dbclass
{
    protected $title;
    protected $text;
    protected $date;
    protected $author;
    protected $id;

    public function __construct($title = '', $text = '', $author = '', $date = false)
    {
        $this->createArticle($title, $text, $author, $date);
    }

    protected function createArticle($title, $text, $author, $date)
    {
        $this->title = $title;
        $this->text = $text;
        $this->date = $date;
        $this->author = $author;
    }

    public function getArticle()
    {
        return ['title' => $this->title,
            'text' => $this->text,
            'author' => $this->author,
            'date' => $this->date,
        ];
    }

    public function searchArticle($search) {
        return false;
    }
}

?>