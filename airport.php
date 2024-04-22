<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl6.css">
    <title>Odloty samolotów</title>
</head>
<body>
    <div class="banerlewy">
        <h2>Odloty z lotniska</h2>
    </div>
    <div class="banerprawy">
        <img src="zad6.png" alt="logotyp">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="glowny">
        <h4>Tabela odlotów</h4>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egzamin";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `odloty`";
$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0) {
  echo "<table>";
  echo "<thead><tr><th>lp.</th><th>numer rejsu</th><th>czas</th><th>kierunek</th><th>status</th></tr></thead>";
  echo "<tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nr_rejsu"] . "</td><td>" . $row["czas"] . "</td><td>" . $row["kierunek"] . "</td><td>" . $row["status_lotu"] . "</td></tr>";
  }
  echo "</tbody>";
  echo "</table>";
} else {
  echo "Brak danych w bazie.";
}
$conn->close();
?>

</tbody>
  </table>
    </div>
    <div class="stopkalewa">
        <a href="kw1.jpg">Pobierz obraz</a>

    </div>
    <div class="stopkasrodkowa">
    <?php
if(isset($_COOKIE['last_visit'])) {

$last_visit = strtotime($_COOKIE['last_visit']);
$current_time = time();
$hour_difference = $current_time - $last_visit;
$hour = 3600; 
if($hour_difference < $hour) {
echo '<p style="font-weight: bold;">Miło nam, że nas znowu odwiedziłeś</p>';
}
else {
setcookie('last_visit', date('Y-m-d H:i:s'), time() + 3600, '/');
echo '<p style="font-style: italic;">Dzień dobry! Sprawdź regulamin naszej strony</p>';
}
}
else {
setcookie('last_visit', date('Y-m-d H:i:s'), time() + 3600, '/');
echo '<p style="font-style: italic;">Dzień dobry! Sprawdź regulamin naszej strony</p>';
}
?>

    </div>
    <div class="stopkaprawa">
        <p>Autor: 00000000</p>

    </div>
</body>
</html>
