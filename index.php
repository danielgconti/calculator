<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <br>
    <form>
        <input name="num1" placeholder="Please enter a number">
        <input name="num2" placeholder="Please enter a number">
        
        <select name="operator" id="operator-dropdown">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <br>
        <?php
            if(isset($_GET['operator'])){
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $operator = $_GET['operator'];
                switch($operator){
                    case('None'):
                        echo 'Please select an operator';
                        break;
                    case('Add'):
                        echo $num1 + $num2;
                        break;
                    case('Subtract'):
                        echo $num1 - $num2;
                        break;
                    case('Multiply'):
                        echo $num1 * $num2;
                        break;
                    case('Divide'):
                        echo $num1 / $num2;
                        break;
                }
            }
        ?>

   
</body>
</html>