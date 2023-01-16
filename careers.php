<?php 
    $title="Veneto Moda | Careers";
    $description="Veneto Moda, il tuo compagno di stile. Leader nello streetwear a Treviso e provincia";
    include('header.php');
?>
</header>
<main class="tuttelenews-container">
    <div class="tuttelenews-sottocontainer" id="form-careers">
        <h1>Lavora con Noi</h1>
        <?php

        if(!isset($_POST['invia'])) {

        ?>

        <form name="cv" method="post" action="careers.php" enctype="multipart/form-data">


            <label>Inserisci il cv</label>
            <input type="file" name="cv">
            <label>Inserisci foto</label>
            <input type="file" name="foto">
            <input type="submit" name="invia" value="Invia">


        </form>

        <?php

        } else {

            define("UPLOAD_DIR","upload/");
            include("include/funzioni.php");

            $nome_file_temporaneo=$_FILES['cv']['tmp_name'];
            $nome_file=strtolower(togli_spazi($_FILES['cv']['name']));
            $dimensione_file=$_FILES['cv']['size'];

            if(is_uploaded_file($nome_file_temporaneo)) {

                if($dimensione_file > 2097152) {

                    echo "<p>Attenzione il file non deve superare i 2 MB</p>";
                    exit;

                }

                if(estensione_file($nome_file)!='pdf') {

                    echo "<p>Formato non corretto</p>";
                    exit;

                }

                if(file_exists(UPLOAD_DIR.$nome_file)) {

                    $nome_file=rinomina_file($nome_file);
                    //echo "<p>Attenzione il nome del file esiste già, rinominalo e ricaricalo</p>";
                    //exit;

                }

                if(!move_uploaded_file($nome_file_temporaneo, UPLOAD_DIR.$nome_file)) {

                    echo "<p>Errore nel caricamento dati</p>";
                    exit;

                }

                echo "<p>Grazie per aver caricato il file</p>";


            }

            $nome_file_temporaneo=$_FILES['foto']['tmp_name'];
            $nome_file=strtolower(togli_spazi($_FILES['foto']['name']));
            $dimensione_file=$_FILES['foto']['size'];

            if(is_uploaded_file($nome_file_temporaneo)) {

                if($dimensione_file > 2097152) {

                    echo "<p>Attenzione il file non deve superare i 2 MB</p>";
                    exit;

                }

                if(estensione_file($nome_file)!='jpg') {

                    echo "<p>Formato non corretto</p>";
                    exit;

                }

                if(file_exists(UPLOAD_DIR.$nome_file)) {

                    $nome_file=rinomina_file($nome_file);
                    //echo "<p>Attenzione il nome del file esiste già, rinominalo e ricaricalo</p>";
                    //exit;

                }

                if(!move_uploaded_file($nome_file_temporaneo, UPLOAD_DIR.$nome_file)) {

                    echo "<p>Errore nel caricamento dati</p>";
                    exit;

                }

                echo "<p>Grazie per aver caricato il file</p>";


            }



        }

        ?>


        




    </div> 
</main>
<!-- includo footer con script escluso lo swiper. !!ATTENZIONE!! NON INCLUSI CHIUSURA TAG BODY E TAG HTML -->

<?php 
        include('footer.php');
    ?>

</body>
</html>