<?php
$host = "localhost"; // Адрес сервера PostgreSQL
$port = "5432"; // Порт PostgreSQL
$dbname = "web";
$user = "postgres";
$password = "trahal tvoy mamu";

// Подключение к базе данных
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Ошибка подключения к базе данных: " . pg_last_error());
}

// Выполнение SQL-запроса для извлечения данных
$query = "SELECT * FROM hits";
$result = pg_query($conn, $query);

if (!$result) {
    die("Ошибка выполнения запроса: " . pg_last_error());
}

echo "<tr>
                    <td colspan=5>
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
                </tr>";

// Вывод данных в виде HTML-таблицы
while ($row = pg_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $row["X"] . "</td>
            <td>" . $row["Y"] . "</td>
            <td>" . $row["R"] . "</td>
            <td>" . $row["date"] . " " . $row["time"] ."</td>
            <td>" . $row["result"] . "</td>
          </tr>";
}
// Закрываем соединение
pg_close($conn);

