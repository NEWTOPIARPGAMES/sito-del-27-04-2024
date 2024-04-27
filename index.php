<!DOCTYPE html>
<html>
<head>
<body class="bg-dark text-white">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CHATGRAM REGISTRATI</title>
</head>
<body>
    <div class="text-white bg-dark">
        <h1>CHATGRAM REGISTRATI</h1>
        <form action=register.php method="POST">
        <br>
            <input type="email" placeholder="inserisci una email" id="email" required>
            <br>
            <br>
            <input id="password" type="password" placeholder="inserisci una password" required>
            <br>
            <br>
            <input id="username" type="username" placeholder="inserisci un username" required>
            <br>
            <br>
            <input type="checkbox" required> Accetta i termini di servizio</input>
            <br>
            <br>
            <button type="submit" href="home.php" class="btn btn-primary">REGISTRATI</button>
            <br>
            <br>
            <a id="change" href="login.php">ho un account</a>
        </form>
    </div>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
