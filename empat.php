<?php
class Author{
    public $name;
    public $description;

    public function __construct($name,$description)
    {
        $this->name=$name;
        $this->description=$description;
    }

    public function show($type): array {
        if ($type === 'full') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        } elseif ($type === 'name_only') {
            return [
                'name' => $this->name
            ];
        } else {
            return [];
        }
    }
}

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

class Publisher {
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(int $phone): void {
        $this->phone = (string) $phone;
    }

    public function getPhone(): int {
        return (int) $this->phone;
    }
}
