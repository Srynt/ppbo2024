<?php

class Author
{
    
    public $name;
    public $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show(string $type) : array
    {
        if ($type === 'ingfokan') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        } 
    }
}

$author = new Author("jokyo wie", "har har har har");
$ingfomin= $author->show('ingfokan');
print_r($ingfomin);


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

}

$book = new Book(
    9781234567897, 
    "Berserk", 
    "Bercerita tentang seorang pemuda",
    "Manga",
    "English,Japanese",
    10000,
    "-",
    "Hehehehe"
);

$info = $book->ShowAll();
print_r($info);



class Publisher
{
    public $name;
    public $address;

    private $phone;

    public function __construct(string $name, string $address, int $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(int $phone) : void
    {
        $this->phone = $phone;
    }

    public function getPhone() : int
    {
        return $this->phone;
    }
}

$publisher = new Publisher("Kapal Lawd", "Rt 5 w 3", 1234567890);

$publisher->setPhone(9876543210);

$phone = $publisher->getPhone();
echo "Phone number: {$phone}\n";





