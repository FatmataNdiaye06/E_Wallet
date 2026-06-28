<?php
    include "./repository.php";

       $transactions=[];


    function afficherMenu(){
            echo "   Menu Distributeur   \n"; 
            echo "1. Creer wallet \n";
            echo "2. Faire Dépot \n";
            echo "3. Faire retrait \n";
            echo "4. Lister les Transactions \n";
            echo "0. Quitter \n";
    }

    function verifSaisie(array &$transactions){
        
        do {
        $choix=readline(" \n Que voulez vous faire: \n");

            switch ($choix) {
                case '1':
                    echo "Creation de  Wallet \n";
                    $newWallet=saisirWallet();
                    createWallet($newWallet);
                    break;

                case '2':
                    echo "Faire un depot \n";
                    faireDepot();
                    break;
                
                case '3':
                    echo "Faire un retrait \n";
                    faireRetrait();
                    break;
                
                case '4':
                    echo "Lister les Transactions \n";
                    echo ($transactions);
                    afficherTransaction($transactions);

                    break;
                
                case '0':
                    echo "Au revoir \n";
                    break;
                
                default:
                echo (" Choix invalide, veuillez réessayer \n");
                    break;
            }
            } while ($choix !=='0' );
    }

    afficherMenu();
    verifSaisie($transactions);


?>