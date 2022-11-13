 <?php
    $servername = "localhost";
    $username = "root";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=rentacardb", $username);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
