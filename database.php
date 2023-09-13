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

$query = "SELECT * FROM hits";
$result = pg_query($conn, $query);

if (!$result) {
    die("Ошибка выполнения запроса: " . pg_last_error());
}

echo "<tr>
                    <td colspan=6>
    Таблица попаданий
</td>
                </tr>
                <tr>
                    <td>
field: X
</td>
                    <td>
field: Y
</td>
                    <td>
field: R
</td>
                    <td>
date and time
</td>
                    <td>
result
                    </td>
                    <td>
                    execute time
                    </td>
                </tr>";
$ans = '';
while ($row = pg_fetch_assoc($result)) {
//        echo "<tr>
//                <td>" . $row["X"] . "</td>
//                <td>" . $row["Y"] . "</td>
//                <td>" . $row["R"] . "</td>
//                <td>" . $row["date"] . " " . $row["time"] ."</td>
//                <td>" . $row["result"] . "</td>
//              </tr>";
    $ans= "<tr><td>" . $row["X"] . "</td><td>" . $row["Y"] . "</td><td>" . $row["R"] . "</td><td>" . $row["date"] . " " . $row["time"] ."</td><td>" . $row["result"] ."</td><td>" . $row["timer"] . "</td></tr>" . $ans;
}
echo $ans;
pg_close($conn);

