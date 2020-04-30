git<?php

namespace Library;

class Book extends LibraryItem{
    
    function __construct($author, $publisher, $ISBN, $bookEdition,$title, $category, $deweyDecimal) {
        parent::__construct($title, $category, $deweyDecimal);
        $this->author = $author;
        $this->publisher = $publisher;
        $this->ISBN = $ISBN;
        $this->bookEdition = $bookEdition;
    }
    function getAuthor() {
        return $this->author;
    }

    function getPublisher() {
        return $this->publisher;
    }

    function getISBN() {
        return $this->ISBN;
    }

    function getBookEdition() {
        return $this->bookEdition;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    function setISBN($ISBN) {
        $this->ISBN = $ISBN;
    }

    function setBookEdition($bookEdition) {
        $this->bookEdition = $bookEdition;
    }   
    
          private $author;   
          private $publisher;    
          private $ISBN;              
          private $bookEdition; 
}