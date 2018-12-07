<?php

class Cercle extends Ellipse {
    
    /**
     * @var integer rayon du cercle
     */

    protected $rayon;

    /** Contruction de l'objet cercle
     * 
     * @param integer $rayon rayon du cercle
     *     * @return void
     */
    public function __construct($rayon){
        parent::__construct($rayon,$rayon);
        $this->rayon = $rayon;

    }
}