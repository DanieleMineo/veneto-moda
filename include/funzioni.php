<?php

    function togli_spazi($string) {

        $risultato=str_replace(" ","_",$string);

        return $risultato;

    }


    function estensione_file($string) {

        $trova_punto=explode(".",$string);
        $estensione=$trova_punto[count($trova_punto)-1];

        if(isset($trova_punto[1]) == false) { return ''; }

        return $estensione;

    }


    function rinomina_file($string) {

        $i=1;
        $solo_nome_file=basename($string,".pdf");
        $test_nome_file=$solo_nome_file.".pdf";

        while(file_exists(UPLOAD_DIR.$test_nome_file)) {

            $test_nome_file=$solo_nome_file."_".$i.".pdf";

            $i++;

        }

        return $string=$test_nome_file;

    }



    ?>

