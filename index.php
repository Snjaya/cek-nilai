<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e2f;
            color: #ffffff;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #00c6ff;
            text-align: center;
            margin-top: 20px;
        }

        hr {
            border: 0;
            border-top: 2px solid #00c6ff;
            margin: 20px 0;
        }

        section {
            margin: 20px;
            padding: 20px;
            background-color: #29293d;
            border-radius: 8px;
        }

        .code-output {
            background-color: #1e1e2f;
            padding: 10px;
            border-radius: 4px;
            font-family: "Courier New", Courier, monospace;
            color: #00ffab;
        }
    </style>
</head>

<body>
    <h1>Practice PHP</h1>

    <section>
        <h2>PHP Variables</h2>
        <?php
        $name = "Son";
        $gender = "Male";
        $fav_num = 3333;

        echo "<div class='code-output'>";
        echo "My name is " . $name . "<br>";
        echo "I am " . $gender . "<br>";
        echo "My favorite number is" . $fav_num. "<br>";
        echo "</div><hr>";
        ?>
    </section>

    <section>
        <h2>PHP Constants</h2>
        <?php
        define("NAME", "Jaya");
        define("GENDER", "Male");

        echo "<div class='code-output'>";
        echo "Name: " . NAME . "<br>";
        echo "Class: " . GENDER . "<br>";
        echo "</div><hr>";
        ?>
    </section>

    <section>
        <h2>Arithmetic Operators</h2>
        <?php
        $x = 11;
        $y = 2;

        echo "<div class='code-output'>";
        echo "Initial values: x = $x, y = $y<br>";
        echo "Addition: " . ($x + $y) . "<br>";
        echo "Subtraction: " . ($x - $y) . "<br>";
        echo "Multiplication: " . ($x * $y) . "<br>";
        echo "Division: " . ($x / $y) . "<br>";
        echo "Modulus: " . ($x % $y) . "<br>";
        echo "Exponentiation: " . ($x ** $y) . "<br>";
        echo "</div><hr>";
        ?>
    </section>

    <section>
        <h2>Assignment Operators</h2>
        <?php
        $x = 15;
        $y = 10;

        echo "<div class='code-output'>";
        echo "Addition Assignment: " . ($x += $y) . "<br>";
        echo "Subtraction Assignment: " . ($x -= $y) . "<br>";
        echo "Multiplication Assignment: " . ($x *= $y) . "<br>";
        echo "Division Assignment: " . ($x /= $y) . "<br>";
        echo "Modulus Assignment: " . ($x %= $y) . "<br>";
        echo "</div><hr>";
        ?>
    </section>

    <section>
        <h2>Comparison Operators</h2>
        <?php
        $x = 15;
        $y = 10;

        echo "<div class='code-output'>";
        echo "Equal (==): " . var_export($x == $y, true) . "<br>";
        echo "Identical (===): " . var_export($x === $y, true) . "<br>";
        echo "Not Equal (!=): " . var_export($x != $y, true) . "<br>";
        echo "Not Equal (<>): " . var_export($x <> $y, true) . "<br>";
        echo "Greater Than (>): " . var_export($x > $y, true) . "<br>";
        echo "Less Than (<): " . var_export($x < $y, true) . "<br>";
        echo "Greater or Equal (>=): " . var_export($x >= $y, true) . "<br>";
        echo "Less or Equal (<=): " . var_export($x <= $y, true) . "<br>";
        echo "</div><hr>";
        ?>
    </section>

    <section>
        <h2>Increment & Decrement Operators</h2>
        <?php
        $x = 10;

        echo "<div class='code-output'>";
        echo "Pre-Increment: " . ++$x . "<br>";
        echo "Post-Increment: " . $x++ . "<br>";
        echo "Pre-Decrement: " . --$x . "<br>";
        echo "Post-Decrement: " . $x-- . "<br>";
        echo "</div>";
        ?>
    </section>
</body>

</html>
