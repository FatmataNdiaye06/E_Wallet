<?php

    function verifDonnee(array $newWallet){
        foreach ($newWallet as $elements => $value) {
            if($value==''){
            return 10;
            }
        }
        return 5;
    }

    function verifSolde(array $newWallet){
        $solde = $newWallet['solde'];
        if($solde<0){
            return 10;
        }
        return 5;
    }

    function veriferNombre(array $newWallet){
        $telephone = $newWallet['telephone'];
        $code = $newWallet['code'];
        $longtel = strlen($telephone);
        $longcode =  strlen($code);
        if($longtel>9 || $longcode>4){
                return 10;
        }
        return 5;
    }
?>