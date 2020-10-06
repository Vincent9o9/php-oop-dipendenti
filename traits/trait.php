<?php
trait SpecificheDipendente{
   protected $tipoContratto,$numeroMatricola;

   public function setSpecificheContratto($_tipoContratto){
        $this->tipoContratto=$_tipoContratto;
   }

   public function setSpecificheMatricola($_numeroMatricola){
        $this->numeroMatricola=$_numeroMatricola;
    }

   public function getSpecificheContratto(){
        return $this->tipoContratto.' ';
    }

    public function getSpecificheMatricola(){
        return $this->numeroMatricola;
    }
} 
?>
