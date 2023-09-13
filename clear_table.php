<?php
$host = "localhost";
$port = "5432";
$dbname = "web";
$user = "postgres";
$password = "0426186";
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    die("Ошибка подключения к базе данных: " . pg_last_error());
}
$query = "DELETE FROM hits";
$result = pg_query($conn, $query);
if (!$result) {
    die("Ошибка выполнения запроса: " . pg_last_error());
}

echo include 'database.php';