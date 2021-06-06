<?php

class Conexao extends SQLite3{
    function __construct()
    {
        $this ->open("database/db.db");
    }
}

    $db= new Conexao();
    if($db){
        echo "Conectado com sucesso";
    }else{
        echo "Falha";
    }


    ?>