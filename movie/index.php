 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>Bienvenu</p>
</div>
<!-- Back slash \ -->
<?php
// include "controller/MyFilmController.php";
require "controller/MyFilmController.php";
use controller\MyFilmController;

echo "fais chier";
$film = new MyFilmController ();

// echo " voila" . $film->readx ();

/*
 * $dbConnection = mysqli_connect ( "localhost", "root", "mackrizo", "Moviepolis" );
 * $query = "SELECT * from Films";
 *
 * $result = mysqli_query ( $dbConnection, $query );
 *
 * if (! $result) {
 * echo "<br>probleme de query";
 * } else {
 * // echo "on le var_dump<br>";
 * // var_dump($result);
 *
 * while ( $row = $result->fetch_assoc () ) {
 * $film = new Film ();
 * echo $row ['id_film'] . " " . $row ['titre_film'] . " " . $row ['pays'] . " " . $row ['duree'] . " " . $row ['date_sortie'] . " " . $row ['synopsis_film'] . " " . $row ['id_personne'];
 * var_dump ( $film );
 * echo "<br>*****************************<br>";
 * }
 * }
 *
 * mysqli_close ( $dbConnection );
 */
?>




<a href="/movie/controller/FilmController.php?action=readAll>"></a><br>

</body>
</html>
