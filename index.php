<?php
$first = '';
$operator = '';
$second = '';
$result = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['first'];
    $operator = $_POST['operator'];
    $second = $_POST['second'];
    switch ($operator) {
        case '+':
            $result = $first + $second;
            break;
        case '-':
            $result = $first - $second;
            break;
        case '%':
            $result = $first % $second;
            break;
        case '*':
            $result = $first * $second;
            break;
    }
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .calculator {
                width: 300px;
                margin: 20px;
                padding: 10px;
                border: 1px solid red;
            }

            h2 {
                text-align: center;
            }

            .calculator input {
                padding: 3px;
                margin: 3px;
            }
        </style>
    </head>
    <body>
    <form action="" method="POST">
        <div class="calculator">
            <h2>Simple Caculator</h2>
            <lable>
                First operand : <input type="number" name="first" value=""><br>
            </lable>
            <lable>
                Operator: <select name="operator" id=""><br>
                    <option value="addition">addition</option>
                    <br>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="%">%</option>
                </select>
                <br>
            </lable>
            <lable>
                Second operand: <input type="number" name="second" value=""><br>
            </lable>
            <input type="submit" value="Caculate">
        </div>
    </form>
    <br>
    <h2>Result: <p>
            <?php
            if ( $result != '' ){
                echo $first . ' ' .$operator . ' ' .$second . ' = ' .$result;
            }
            ?>
        </p></h2>
    </body>
    </html>
<?php

