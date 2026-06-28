<?php
    include "./validator.php";

     function saisirWallet(){
        $wallet=['clientName'=>'','telephone'=>'','code'=>'','solde'=>0];

        $wallet['clientName']=readline("Nom du client: ");
        $wallet['telephone']=readline("Numero du client: ");
        $wallet['code']=readline("votre code: ");
        $wallet['solde']=readline("votre solde: ");
        return $wallet;
    }
    function createWallet(array $newWallet){
        global $wallets;
        if(verifDonnee($newWallet)== 5 && verifSolde($newWallet)==5 && veriferNombre($newWallet)==5){
             $wallets[]=$newWallet;
             var_dump($wallets);
        }
        else{
            echo("donne invalide tous les cases sont obligatoires \n");
            $newWallet=saisirWallet();
        }
    }
    function faireDepot(){
        global $wallets,$transactions;
        $telephoneSaisie= readline("Entrez votre numero de telephone: ");
        foreach ($wallets as $elements => $value) {
            $indexClient=$elements;
            if($value['telephone']==$telephoneSaisie){
                    $solde = readline("Entrer le montant a deposer: ");
                    $wallets[$indexClient]['solde']+=$solde;
                    $newSolde=$wallets[$indexClient]['solde'];
                    $transactions[]=['montant' => $solde,
                                     'client'  => $value['clientName']
                    ];
                    echo("Votre solde est $newSolde \n");
            }
            else {
                echo("Num introuvable \n");
            }
        }
    }

     function faireRetrait(){
        global $wallets;
        $telephoneSaisie= readline("Entrez votre numero de telephone: ");
        foreach ($wallets as $elements => $value) {
            $indexClient=$elements;
            if($value['telephone']==$telephoneSaisie){
                    $solde = readline("Entrer le montant a retiré: ");
                    $wallets[$indexClient]['solde']-=$solde;
                    $newSolde=$wallets[$indexClient]['solde'];
                    $transactions[]=['montant' => $solde,
                                     'client'  => $value['clientName']
                    ];

                    echo("Votre solde est $newSolde \n");
            }
            else {
                echo("Num introuvable \n");
            }
        }
    }

   
    function afficherTransaction(array $transactions){
        foreach ($transactions as $elements) {
            echo $elements['montant'];
            echo $elements['client'];
        }
    }

?>