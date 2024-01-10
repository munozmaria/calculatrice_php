<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        input[type=number],
        input[type=text],
        select {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;

        }


        button {
            width: 30%;
            background-color: #ff80ff;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            font-size: 24px;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
        }

        button:hover {
            background-color: #846281;
        }

        div {
            border-radius: 10px;
            background-color: #f2f2f2;
            padding: 140px;
            margin: 100px;
            text-align: center;

        }

        footer {
            width: 100%;
            background-color: #323232;
            color: #f2f2f2;
            height: 8vh;
            text-align: center;
            padding-top: 5vh;

            border-radius: 5px;
        }

        .result {
            color: #ff80ff;
            font-size: 26px;
            font-weight: bold;
        }

        @media only screen and (max-width: 950px) {

            div {
                border-radius: 10px;
                background-color: #f2f2f2;
                padding: 10px;
                margin: 15px;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div>
        <img src="img/Calculator.png" width="150px" alt="Calculator">
        <form action="index.php" method="post">
            <input type="number" name="num1" placeholder="First Number"> <br>
            <input type="text" name="operator" placeholder=" +  -  *  / "> <br>
            <input type="number" name="num2" placeholder="Second Number"> <br>
            <button type="submit">Calculate</button>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num1 = $_POST["num1"] ?? null;
            $num2 = $_POST["num2"] ?? null;
            $operator = $_POST["operator"] ?? null;

            if ($num1 !== null && $num2 !== null && $operator !== null) {
                if ($operator == "+") {
                    echo '<p class="result">Result : ' . ($num1 + $num2) . '</p>';
                } elseif ($operator == "-") {
                    echo '<p class="result">Result : ' . ($num1 - $num2) . '</p>';
                } elseif ($operator == "*") {
                    echo '<p class="result">Result : ' . ($num1 * $num2) . '</p>';
                } elseif ($operator == "/") {
                    echo '<p class="result">Result : ' . ($num1 / $num2) . '</p>';
                } else {
                    echo "Opérateur invalide";
                }
            } else {
                echo "Veuillez remplir tous les champs.";
            }
        }
        ?>

    </div>
    <footer>
        Copyright © 2024 - All rights Reserved - Designed by Maria
    </footer>
</body>


</html>