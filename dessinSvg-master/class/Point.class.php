<?php 

class Point {

    protected $positionX;
    protected $positionY;

    public function __construct($positionX,$positionY){

        $this->positionX = $positionX;
        $this->positionY = $positionY;

    }


    /**
     * Get the value of positionX
     */ 
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * Set the value of positionX
     *
     * @return  self
     */ 
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;

        return $this;
    }

    /**
     * Get the value of positionY
     */ 
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * Set the value of positionY
     *
     * @return  self
     */ 
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;

        return $this;
    }
}