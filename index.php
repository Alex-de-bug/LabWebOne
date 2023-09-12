
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Lab for Web</title>
    <style type="text/css">
    body {text-align: center; }
        footer {background: darkgrey; text-align: left;}

        img {width: 400px;}
        #y {width: 160px}
        button:hover{
            background-color: aqua;
        }
        .clear_table:hover{
            background-color: red;
            color: azure;
        }
        .submit-button:hover{
            background-color: green;
            color: azure;
        }
        #coordinate-system:hover{
            width: 600px;
        }

        table {text-align: center; border: 1px solid black; display: inline-block; font-family: .AppleSystemUIFont;}
        .main_table {text-align: center;}
        td, th {border: 1px solid black}
        th {font-family: fantasy; color: rebeccapurple;}
        #coordinate-system {
        }
    </style>
</head>
    <div class = "main_table"></div>
    <body>
        <table>
            <tr>
                <th colspan=2>Дениченко Александр Олегович P3212 2214 </th>
            </tr>
            <td colspan=2>
<!--                <img src="images/pic.png"/>-->
                <canvas id="coordinate-system"></canvas>
            </td>
            <form method="get">
                <tr>
                    <td>
                        <fieldset>
                            <legend>x:</legend>

                            <input type="radio" id="btn_radio_1" name="x" value="-4" required onclick="showValueX(-4)"/>
                            <label for="btn_radio_1">-4</label>

                            <input type="radio" id="btn_radio_2" name="x" value="-3" required onclick="showValueX(-3)"/>
                            <label for="btn_radio_2">-3</label>

                            <input type="radio" id="btn_radio_3" name="x" value="-2" required onclick="showValueX(-2)"/>
                            <label for="btn_radio_3">-2</label>

                            <input type="radio" id="btn_radio_4" name="x" value="-1" required onclick="showValueX(-1)"/>
                            <label for="btn_radio_4">-1</label>

                            <input type="radio" id="btn_radio_5" name="x" value="0" required onclick="showValueX(0)"/>
                            <label for="btn_radio_5">0</label>

                            <input type="radio" id="btn_radio_6" name="x" value="1" required onclick="showValueX(1)"/>
                            <label for="btn_radio_6">1</label>

                            <input type="radio" id="btn_radio_7" name="x" value="2" required onclick="showValueX(2)"/>
                            <label for="btn_radio_7">2</label>

                            <input type="radio" id="btn_radio_8" name="x" value="3" required onclick="showValueX(3)"/>
                            <label for="btn_radio_8">3</label>

                            <input type="radio" id="btn_radio_9" name="x" value="4" required onclick="showValueX(4)"/>
                            <label for="btn_radio_9">4</label>
                            <div class="result_X">X </div>
                            <input type="hidden" id="param_x" name="x" value="" required>
                        </fieldset>
                    </td>
                    <td>
                        <button type="button" class="button_R" onclick="showValue(1)">1</button>
                        <button type="button" class="button_R" onclick="showValue(2)">2</button>
                        <button type="button" class="button_R" onclick="showValue(3)">3</button>
                        <button type="button" class="button_R" onclick="showValue(4)">4</button>
                        <button type="button" class="button_R" onclick="showValue(5)">5</button>
                        <div class="result_R">R </div>
                        <input type="hidden" id="param_r" name="r" value="" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="y">y:</label>
                        <input type="text" name="y" id="y" placeholder="Введите значение от -3 до 3" required>
                    </td>
                    <td>
                        <input class="submit-button" type="submit" value="Проверка результата">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="clear_table" type="button" value="Очистить таблицу">
                    </td>
                </tr>
            </form>
        </table>
        <table class="database_table">
            <tbody>
                <div>
                    <?php include 'database.php'; ?>
                </div>
            </tbody>
        </table>

    </body>

    <footer>Все права защищены мной</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="index.js"></script>
    <script src="decart.js"></script>
    <script src="button_sim.js"></script>

</html>