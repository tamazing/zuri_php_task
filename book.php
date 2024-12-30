<?php

class Book {
    // Attributes (properties)
    private $title;
    private $author;
    private $price;

    // Constructor
    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Methods (getters and setters)

    // Get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Set the title of the book
    public function setTitle($title) {
        $this->title = $title;
    }

    // Get the author of the book
    public function getAuthor() {
        return $this->author;
    }

    // Set the author of the book
    public function setAuthor($author) {
        $this->author = $author;
    }

    // Get the price of the book
    public function getPrice() {
        return $this->price;
    }

    // Set the price of the book
    public function setPrice($price) {
        $this->price = $price;
    }

    // Method to display the book details
    public function displayBookDetails() {
        echo "Book Title: " . $this->getTitle() . "\n";
        echo "Author: " . $this->getAuthor() . "\n";
        echo "Price: $" . $this->getPrice() . "\n";
    }
}

// Creating instances of the Book class

$book1 = new Book("Success Buttons", "David Oyedepo", 10.99);
$book2 = new Book("It is written", "David Ola-Albert", 8.99);
$book3 = new Book("Releasing the supernatural", "David Oyedepo", 12.99);

// Interacting with the objects

// Displaying details of books
echo "Book 1 Details:\n";
$book1->displayBookDetails();
echo "\n";

echo "Book 2 Details:\n";
$book2->displayBookDetails();
echo "\n";

echo "Book 3 Details:\n";
$book3->displayBookDetails();
echo "\n";

// Updating book details using setters

// Updating price of book1
$book1->setPrice(13.49);

// Display updated details of book1
echo "Updated Book 1 Details:\n";
$book1->displayBookDetails();
echo "\n";

?>