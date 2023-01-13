<?php 
    $title="Veneto Moda | Contatti";
    $description="Veneto Moda, il tuo compagno di stile. Leader nello streetwear a Treviso e provincia";
    include('header.php');
?>
</header>
<main class="tuttelenews-container">
    <div class="tuttelenews-sottocontainer" id="form-contatti">
        <h1>Contattaci</h1>

<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if(!isset($_POST['invia'])) {
?>

<form name="contatti" action="contatti.php" method="post">
    <label>*Nome</label>
        <input type="text" name="nome" placeholder="Mario" required>
    <label>*Cognome</label>
        <input type="text" name="cognome" placeholder="Rossi" required>
    <label>*Email</label>
        <input type="email" name="email" placeholder="indirizzo@xxx.xxx" required>
    <label>*Messaggio</label>
        <textarea name="messaggio" placeholder="Scrivi qui il tuo messaggio" required></textarea>
    <div id="checkbox">
        <label class="checkbox-wrapper">Dichiaro di aver preso visione dell'informativa sulla <a href="https://www.iubenda.com/privacy-policy/44620052" target="_blank">privacy</a>
            <input type="checkbox" name="privacy" required>
            <span class="checkmark"></span>
        </label>
    </div>
    <input type="submit" name="invia" value="Invia">
<span>*Campi obbligatori</span>
</form>

<?php
    } else {

        $nome=$_POST['nome'];
        $cognome=$_POST['cognome'];
        $email=$_POST['email'];
        $messaggio=$_POST['messaggio'];

        $privacy='';

        if(isset($_POST['privacy'])) { $privacy=$_POST['privacy']; }

        if ($nome == '' || $cognome == '' || $email == '' || $messaggio == '' || $privacy == '') {

            echo "<p class=\"ritorno\">Alcuni campi obbligatori non sono stati compilati. La mail non &egrave; stata inviata.<br>
            <a href=\"contatti.php\" title=\"Torna indietro\">Torna indietro</a></p>";


        } else { 

            
            require_once('phpmailer/src/PHPMailer.php');

            $mail = new PHPMailer();

            $mail -> CharSet="UTF-8";
            $mail -> From="$email";
            $mail -> FromName="$cognome $nome";
            $mail -> IsHTML(true);
            $mail -> Subject="Messaggio inviato dal sito - Richiesta di contatto";
            $mail -> Body="<p>&Egrave; stata inviata una richiesta di informazioni dal sito. I dati sono i seguenti:</p>

            <ul>
                <li>Nome: $nome</li>
                <li>Cognome: $cognome</li>
                <li>Email: $email</li>
                <li>Testo del messaggio: $messaggio</li>
                <li>Privacy: $privacy</li>
            </ul>
            
            ";
            $mail -> AddAddress("stefano.pederiva@venetoformazione.it");

            if ($mail -> Send()) {

                echo "<p class=\"ritorno\">Mail inviata con successo<br>
                <a href=\"contatti.php\" title=\"Torna indietro\">Torna indietro</a></p>"; 

            } else { echo "<p class=\"ritorno\">La mail non &egrave; stata inviata<br>
                <a href=\"contatti.php\" title=\"Torna indietro\">Torna indietro</a></p>"; 
            
            }

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