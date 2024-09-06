<?php

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPages;
    public $author;
    public $publisher;

    public function __construct(int $ISBN, string $title, string $description, string $category, string $language, int $numberOfPages, string $author, string $publisher
    ) { $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPages = $numberOfPages;
        $this->author = $author;
        $this->publisher = $publisher;
    }


    public function ShowAll() : array
    {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Category' => $this->category,
            'Language' => $this->language,
            'Number of Pages' => $this->numberOfPages,
            'Author' => $this->author,
            'Publisher' => $this->publisher
        ];
    }
    
    public function detail(int $ISBN) : array
    {
        if ($this->ISBN === $ISBN) {
            return $this->showAll();
        } else {
            return ['Error' => 'Bukunya nda ketemu.'];
        }
    }

}
