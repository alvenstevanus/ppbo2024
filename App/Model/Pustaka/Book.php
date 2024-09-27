<?php
namespace App\Admin\Model\Pustaka;
class Book {
    public $isbn;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($isbn, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll(): array {
        return [
            'isbn' => $this->isbn,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher
        ];
    }

    public function detail($ISBN): array {
        if ($this->isbn === $ISBN) {
            return $this->showAll();
        }
        return [];
    }
}
