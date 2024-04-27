<?php
    require_once('config.php');

    $email = $connessione->real_escape_string($_POST['email']);
    $password = $connessione->real_escape_string($_POST['password']);
    $username = $connessione->real_escape_string($_POST['username']);

    $sql = "INSERT INTO utenti (email, password, username) VALUES ('$email', '$password', '$username')";
    if($connessione->query($sql) === true){
        echo "Registrazione effetuata con successo";
    }else{
        echo "errore durante la registrazione utente" . $connessione->error;
    }
?>
