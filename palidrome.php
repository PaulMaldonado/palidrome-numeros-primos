<?php 
    function palidrome($word) {
        $lowercase = explode(" ", strtolower($word)); // Convertimos la cadena a minisculas
        $new = "";

        foreach($lowercase as $w) {
            trim($w); // Eliminamos los espacios en blanco
            $new .= $w;
        }

        if($new == strrev($new)) {
            return "Es palindrome";
        } else {
            return "No es palindrome";
        }
    }

    $lowercase = "reconocer";
    echo palidrome($lowercase);
?>