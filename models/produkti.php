<?php 

class Produkti{
    private $pid;
    private $image;
    private $description;
    private $price;

    function __construct($pid, $image, $description, $price){
        $this->pid=$pid;
        $this->image=$image;
        $this->description=$description;
        $this->price=$price;
    }

    function getPid(){
        return $this->pid;
    }

    function getImage(){
        return $this->image;
    }

    function getDescription(){
        return $this->description;
    }

    function getPrice(){
        return $this->price;
    }

}


?>