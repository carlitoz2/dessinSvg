<?php 

class Point {
    /**
     * @var integer position X du pointd'ancrage
     */
    protected $positionX;
    /**
     * @var integer position Y du point d'ancrage
     */
    protected $positionY;


    /** Contruction de l'objet point d'ancrage
     * 
     * @param integer $positionX position X du point d'ancrage
     * @param integer $positionX position Y du point d'ancrage
     * @return void
     */
    public function __construct($positionX,$positionY){

        $this->positionX = $positionX;
        $this->positionY = $positionY;

    }


   

    /**
     * Get position X du pointd'ancrage
     *
     * @return  integer
     */ 
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * Set position X du pointd'ancrage
     *
     * @param  integer  $positionX  position X du pointd'ancrage
     *
     * @return  self
     */ 
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;

        return $this;
    }

    /**
     * Get position Y du point d'ancrage
     *
     * @return  integer
     */ 
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * Set position Y du point d'ancrage
     *
     * @param  integer  $positionY  position Y du point d'ancrage
     *
     * @return  self
     */ 
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;

        return $this;
    }
}