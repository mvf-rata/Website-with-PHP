<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="" method="get" id="form">
        <input type="text" name="num1" id="num1">
        <br>
        <select name="operators" id="operators">
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
            <option value="Sqrt">Sqrt</option>
            <option value="Power">Power of</option>
        </select>
        <br>
        <input type="text" name="num2" id="num2">
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>


    <?php
        if (isset($_GET['submit'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operators'];

            switch ($operator){
                case 'Add':
                    echo $num1 + $num2;
                break;
                case 'Subtract':
                    echo $num1 - $num2;
                break;
                case 'Multiply':
                    echo $num1 * $num2;
                break;
                case 'Divide':
                    echo $num1 / $num2;
                break;
                case 'Sqrt':
                    echo sqrt($num1);
                break;
                case 'Power':
                    echo pow($num1, $num2);
                break;
                default;
            }
        }
    ?>

</body>
</html>