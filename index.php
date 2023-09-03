
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

        table {text-align: center; border: 1px solid black; display: inline-block}
        .main_table {text-align: center;}
        td, th {border: 1px solid black}
        th {font-family: fantasy; color: rebeccapurple;}

    </style>
</head>
    <div class = "main_table"></div>
    <body>
        <table>
            <tr>
                <th colspan=2>Дениченко Александр Олегович P3212 2214 </th>
            </tr>
            <td colspan=2>
                <img src="images/pic.png"/>
            </td>
            <form method="get">
                <tr>
                    <td>
                        <fieldset>
                            <legend>x:</legend>

                            <input type="radio" id="btn_radio_1" name="x" value="-4" />
                            <label for="btn_radio_1">-4</label>

                            <input type="radio" id="btn_radio_2" name="x" value="-3" />
                            <label for="btn_radio_2">-3</label>

                            <input type="radio" id="btn_radio_3" name="x" value="-2" />
                            <label for="btn_radio_3">-2</label>

                            <input type="radio" id="btn_radio_4" name="x" value="-1" />
                            <label for="btn_radio_4">-1</label>

                            <input type="radio" id="btn_radio_5" name="x" value="0" />
                            <label for="btn_radio_5">0</label>

                            <input type="radio" id="btn_radio_6" name="x" value="1" />
                            <label for="btn_radio_6">1</label>

                            <input type="radio" id="btn_radio_7" name="x" value="2" />
                            <label for="btn_radio_7">2</label>

                            <input type="radio" id="btn_radio_8" name="x" value="3" />
                            <label for="btn_radio_8">3</label>

                            <input type="radio" id="btn_radio_9" name="x" value="4" />
                            <label for="btn_radio_9">4</label>
                        </fieldset>
                    </td>
                    <td>
                        <button type="button" class="button_R" onclick="showValue(1)">1</button>
                        <button type="button" class="button_R" onclick="showValue(2)">2</button>
                        <button type="button" class="button_R" onclick="showValue(3)">3</button>
                        <button type="button" class="button_R" onclick="showValue(4)">4</button>
                        <button type="button" class="button_R" onclick="showValue(5)">5</button>
                        <div class="result_R">R </div>
                        <input type="hidden" id="param_r" name="r" value="">
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
            </form>
        </table>
    </body>

    <footer>Все права защищены мной</footer>

<script>
    function showValue(value) {
        var resultDiv = document.querySelector(".result_R");
        resultDiv.innerHTML = "R = "+value;
        var form = document.querySelector("#param_r");
        form.value = value;
    }
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="index.js"></script>

</html>