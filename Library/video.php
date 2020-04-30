<?php

Namespace Library;

 
 //the video attributes

 class Video extends LibraryItem implements IPlayable, IRentable {
 
  private $director;
  private $duration;

 
 public function __construct($director, $duration){
 parent::__construct($title, $category, $deweyDecimal);
 $this->duration = $duration;
 $this->producer = $director;
  }
 // getters 
 public function getDuration(){
 return $this->duration;
 }

 public function getDirector(){
 return $this->director;
 }

//setters
  public function setDuration(){
 $this->duration = $duration;
 }

 public function setDirector(){
 $this->producer = $director;
 }
 
// use of interface IPlayable
 
 public function Play(){
    echo '<p>Movie: ' . parent::getTitle() . ' is PLAYING</P>';
 }
 public function Pause(){
    echo '<p>Movie: ' . parent::getTitle() . ' is PAUSED</P>';
 }
 public function Stop(){
    echo '<p>Movie: ' . parent::getTitle() . ' is STOPPED</P>';
 }
 
 // use of interface IRentable
 public function asRent(){
        echo '<p>You have rented Movie: ' . parent::getTitle() . '.</P>';
 }
}

 




