<?php
    require_once "./controller.php";
    require_once "./repository.php";

    function afficherMenu(){
            echo "   Menu Distributeur   \n"; 
            echo "1. Creer wallet \n";
            echo "2. Faire Dépot \n";
            echo "3. Faire retrait \n";
            echo "4. Lister les Transactions \n";
            echo "0. Quitter \n";
    }

    $transactions=[];

    do {
        afficherMenu();
        $choix= (int)readline(" \n Que voulez vous faire: \n");
        verifSaisie($transactions, $choix);
    } while ($choix !==0 );


?>