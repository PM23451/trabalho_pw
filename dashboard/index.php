<?php
include_once("../connection/ligacao.php");

if (isset($_POST["inputEmail"]) && isset($_POST["inputPassword"])) {
  $email = $_POST["inputEmail"];
  $password = $_POST["inputPassword"];

  $sql = "SELECT username FROM login WHERE email = '$email' AND password = '$password'";
  $result = $conn->query($sql);
  if ($result > 0) {
    session_start();
    $_SESSION["username"] = $result->fetch_assoc()["username"];
    header("Location: ../dashboard/dashboard.php");
  } else {
    //echo "Utilizador ou password errados";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Iniciar sessão : Marinhas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="post">
      <img class="mb-4" src="../assets/img/brasao-marinhas.webp" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Dashboard</h1>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar-me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
  </body>
</html>
