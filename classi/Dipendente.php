<?php
require_once '../traits/trait.php';
class Dipendente{
use SpecificheDipendente;
protected $nome,$cognome,$email,$codiceFiscale;


public function __construct($_nome,$_cognome,$_email,$_cf){

    #controlli
    if(!is_string($_nome)){
        die('non hai passato un valore di tipo stringa, errore');
    }

    if(!is_string($_cognome)){
        die('non hai passato un valore di tipo stringa, errore');
    }

    if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        die('non hai passato un valore di tipo email, errore');
    }

    if(strlen($_cf)<>16 || !is_string($_cf)){
        die('non hai passato un valore corretto per il codice fiscale, errore');
    }

    $this->nome=$_nome;
    $this->cognome=$_cognome;
    $this->email=$_email;
    $this->codiceFiscale=$_cf;
}

public function setNome($_nome){
    if(!is_string($_nome)){
        die('non hai passato un valore di tipo stringa, errore');
    }
    $this->nome=$_nome;
}

public function setCognome($_cognome){
    if(!is_string($_cognome)){
        die('non hai passato un valore di tipo stringa, errore');
    }
    $this->cognome=$_cognome;
}

public function setEmail($_email){
    if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        die('non hai passato un valore di tipo email, errore');
    }
    $this->email=$_email;
}

public function setCf($_cf){
    if(strlen($_cf)<>16 || !is_string($_cf)){
        die('non hai passato un valore corretto per il codice fiscale, errore');
    }
    $this->codiceFiscale=$_cf;
}


public function getNome(){
    return $this->nome;
}
public function getCognome(){
    return $this->cognome;
}
public function getEmail(){
    return $this->email;
}
public function getCf(){
    return $this->codiceFiscale;
}


}
?>
