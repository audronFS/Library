<?php

namespace Library;

class Audiobook extends Book implements IPlayable {
    function __construct($author, $publisher, $ISBN, $bookEdition, $narrator, $ListeningLength) {      

        parent::__construct($author, $publisher, $ISBN, $bookEdition);
        $this->narrator = $narrator;
        $this->ASIN = $ASIN;
        $this->ListeningLength = $ListeningLength;
    }
    
       
    function getNarrator() {
        return $this->narrator;
    }

    function getASIN() {
        return $this->ASIN;
    }

    function getListeningLength() {
        return $this->ListeningLength;
    }

    function setNarrator($narrator) {
        $this->narrator = $narrator;
    }

    function setASIN($ASIN) {
        $this->ASIN = $ASIN;
    }

    function setListeningLength($ListeningLength) {
        $this->ListeningLength = $ListeningLength;
    }
    
    public function Play(){
    echo '<p>AudioBook: ' . parent::getTitle() . ' is PLAYING</P>';
 }
 public function Pause(){
    echo '<p>AudioBook: ' . parent::getTitle() . ' is PAUSED</P>';
 }
 public function Stop(){
    echo '<p>AudioBook: ' . parent::getTitle() . ' is STOPPED</P>';
 }

    

    private $narrator;
    private $ASIN;
    private $ListeningLength;
    
}
