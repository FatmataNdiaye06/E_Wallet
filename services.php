<?php
    require_once "./validator.php";
    function recupSaisiUsers(string $message){
        $saisie= readline($message);
        return $saisie;
    }
    
    $saisieTel=recupSaisiUsers("Entrer votre numero: ");


    

    function saisieMontant(string $numeroVerifier){
        if ($numeroVerifier=10) {
            $saisieMontant=recupSaisiUsers("Entrer le montant: ");
            return $saisieMontant;
        }
    }
    $montantSaisie=saisieMontant($numeroVerifier);
?>