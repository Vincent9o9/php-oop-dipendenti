<?php
class Amministrativo extends Dipendente{
    protected $ruolo;

    public function __construct($_nome,$_cognome,$_email,$_cf,$_ruolo){
        parent::__construct($_nome,$_cognome,$_email,$_cf);

        if(!is_string($_ruolo)){
            die('non hai passato un valore di tipo stringa, errore');
        }

        $this->ruolo=$_ruolo;
    }
} 
?>
