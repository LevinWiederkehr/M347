<?php
$servername = "kn02b-db";  // Name des DB-Containers als Hostname
$username = "user";
$password = "password";
$dbname = "mydatabase";
 
// Verbindung erstellen
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verbindung prüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";
 
// Zusätzliche Datenbank-Informationen anzeigen
$result = $conn->query("SELECT VERSION() as version");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>Database version: " . $row["version"];
    }
}
 
$conn->close();
?>