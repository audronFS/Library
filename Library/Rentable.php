<?php

namespace Library;

trait Rentable{
    function payment($days){
        return $days * 0.20;
    }
}

