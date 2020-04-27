<?php

Namespace Library;

 
 //the cds attributes

 class Cd extends LibaryItem implements Iplayable {
 
  private $artist;
  private $producer;
  private $duration;

 
 public function __construct($artist, $producer, $duration){
 parent::__construct($title, $category, $deweyDecimal);
 $this->artist = $artist;
 $this->duration = $duration;
 $this->producer = $producer;
  }
 // getters 
 public function getArtist(){
 return $this->artist;
 }
 public function getDuration(){
 return $this->duration;
 }

 public function getProducer(){
 return $this->producer;
 }

//setters
 public function setArtist(){
 $this->artist = $artist;
 }
 public function setDuration(){
 $this->duration = $duration;
 }

 public function setProducer(){
 $this->producer = $producer;
 }
 // use of interface IPlayable
 
 public function Play(){
    echo '<p>CD: ' . parent::getTitle() . ' is PLAYING</P>';
 }
 public function Pause(){
    echo '<p>CD: ' . parent::getTitle() . ' is PAUSED</P>';
 }
 public function Stop(){
    echo '<p>CD: ' . parent::getTitle() . ' is STOPPED</P>';
 }
 
 // use of interface IRentable
 public function asRent(){
        echo '<p>You have rented CD: ' . parent::getTitle() . '.</P>';
 }
}
 




