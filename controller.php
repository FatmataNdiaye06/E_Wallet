<?php 

     function verifSaisie(array &$transactions, int $choix){
        
            switch ($choix) {
                case '1':
                    echo "Creation de  Wallet \n";
                    $newWallet=saisirWallet();
                    createWallet($newWallet);
                    break;

                case '2':
                    echo "Faire un depot \n";
                    faireDepot($montantVerifier);
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
    }


?>