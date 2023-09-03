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

$x = $_GET["x"];
$y = $_GET["y"];
$r = $_GET["r"];

echo check_hit($x, $y, $r);