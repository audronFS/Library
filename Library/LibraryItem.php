<?php

Namespace Library;

 //the books need to be selected only
 //the books attributes

 abstract class LibraryItem{
 private $title;
 private $category;
 private $deweyDecimal;
 
 public function __construct($title, $category, $deweyDecimal){
 $this->title = $title;
 $this->category = $category;
 $this->deweyDecimal = $deweyDecimal;
 }
 
// getters only
 public function getTitle(){
 return $this->title;
 }
 
 public function getDewyDecimal(){
 return $this->deweyDecimal; 
 }
 
 public function getCategory(){
 return $this->category;
 }
 
 public function setTitle(){
 $this->title=$title;
 }
 public function setDewyDecimal(){
 $this->deweyDecimal=$deweyDecimal;
 }
 public function setCategory(){
 $this->category=$category;
 }

 }
