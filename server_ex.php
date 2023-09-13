<?php

function check_area($X, $Y) {
    if ($X >= 0 && $Y >= 0)
        return 1;
    else if ($X <= 0  && $Y >= 0)
        return 2;
    else if ($X <= 0  && $Y <= 0)
        return 3;
    else
        return 4;
}

function check_hit($X, $Y, $R)
{
    switch (check_area($X, $Y)) {
        case 2:
            if ($X < -$R || $Y > $R / 2)
                return false;
            else {
                $MAX_Y = ($R + $X)/2;
                if ($Y > $MAX_Y)
                    return false;
                return true;

            }
        case 1:
            if ($X > $R)
                return false;
            else {
                if ($Y > $R)
                    return false;
                return true;
            }
        case 4:
            if (pow($X, 2) + pow($Y, 2) > pow($R, 2))
                return false;
            return true;
        case 3:
            if ($X != 0 && $Y != 0)
                return false;
            else if ($X != 0) {
                if ($X > 0 || $X < -$R)
                    return false;
                return true;
            } else {
                if ($Y > 0 || $Y < -$R)
                    return false;
                return true;
            }
        default:
            return false;
    }
}

function add_database($x, $y, $r, $result, $date, $time, $exect_time){
    $host = "localhost";
    $port = "5432";
    $dbname = "web";
    $user = "postgres";
    $password = "0426186";
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    if (!$conn) {
        die("Ошибка подключения к базе данных: " . pg_last_error());
    }
    $query = "INSERT INTO hits VALUES($x, $y, $r, $result, '$date', '$time', '$exect_time')";
    $result = pg_query($conn, $query);

    if (!$result) {
        die("Ошибка выполнения запроса: " . pg_last_error());
    }
    pg_close($conn);

}

$x = $_GET["x"];
$y = $_GET["y"];
$r = $_GET["r"];
$y = (float)$y;
$result = 0;

if(check_hit($x, $y, $r)){
    $result = 1;
}

date_default_timezone_set('Europe/Moscow');
$date = date('Y-m-d');
$time = date('H:i:s');
$exect_time = round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 5)."ms";
add_database($x, $y, $r, $result, $date, $time, $exect_time);


echo include 'database.php';
