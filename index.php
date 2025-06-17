<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator App</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        width: 100%;
        height: 550px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    form input[type="text"] {
        height: 20px;
        border: none;
        display: block;
        border-bottom: 2px solid crimson;
        font-size: 20px;
        outline: none;
    }
    form input[type="text"]:hover {
        border-bottom: 2px solid green;
    }
    select{
        width: 250px;
        height: 40px;
        font-size: 20px;
    }
    button{
        width: 250px;
        height: 50px;
        font-size: 20px;
        background-color: crimson;
        border: none;
        outline: none;
        cursor: pointer;
    }
    .hero{
        position: absolute;
        top: 10px;
        left: 39%;
    }
    .answer{
        color: green;
        font-size: 30px;
    }
    .footer{
        position: relative;
        text-align: center;
    }
</style>
<body>
    <h1 class="hero">Php Calculator</h1>
    <div class="container">
        <form action="" method="get">
            <div class="answer">

            </div>
            <br>
            <br>
            <input type="text" name="num1" placeholder="Enter First Number">
            <br>
            <br>
            <input type="text" name="num2" placeholder="Enter Second Number">
            <br>
            <br>
            <select name="operator" id="">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br><br><br>
            <button type="submit" value="submit" name="submit">Calculate</button>
        </form>
    </div>
    <h4 class="footer">&copy 2025 Daniel  </h4>
</body>
</html>