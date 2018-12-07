<?php 
class Carre extends Rectangle {
    
    /** Contruction de l'objet carre
     * 
     * @param integer $cote coté du carre 
     * @return void
     */
    //protected $cote;
        /** Dessin de l'objet carré
     * 

     * @return string chaine SVG
     */
    public function __construct($cote){
        parent::__construct($cote,$cote);
        //$this->cote = $cote;

    }

}